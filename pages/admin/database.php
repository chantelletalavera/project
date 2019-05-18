<?php
	include 'layout/master.php';
	include '../../connection.php';

     if (! empty($_FILES)) {
     // Validating SQL file type by extensions
     if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
         "sql"
     ))) {
         $response = array(
             "type" => "error",
             "message" => "Invalid File Type"
         );
     } else {
         if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
             move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
             $response = restoreMysqlDB($_FILES["backup_file"]["name"], $conn);
         }
     }
    }
    
    function restoreMysqlDB($filePath, $conn)
    {
     $sql = '';
     $error = '';
     
     if (file_exists($filePath)) {
         $lines = file($filePath);
         
         foreach ($lines as $line) {
             
             // Ignoring comments from the SQL script
             if (substr($line, 0, 2) == '--' || $line == '') {
                 continue;
             }
             
             $sql .= $line;
             
             if (substr(trim($line), - 1, 1) == ';') {
                 $result = mysqli_query($conn, $sql);
                 if (! $result) {
                     $error .= mysqli_error($conn) . "\n";
                 }
                 $sql = '';
             }
         } // end foreach
         
         if ($error) {
             $response = array(
                 "type" => "error",
                 "message" => $error
             );
         } else {
             $response = array(
                 "type" => "success",
                 "message" => "Database Restore Completed Successfully."
             );
         }
     } // end if file exists
     return $response;
    }
	?>
  <style type="text/css">

  a:link {
   color:white;
  }

  .btn-export{
  background-color: #f44336; /* RED */
  border-radius:12px;
  color: white;
  font-weight: 700;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }

   .response {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 2px;
    }

  </style>
 <!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="padding-bottom:50px; background-image: url(../../images/bg1.png);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <div class="app-title">
        <div>
            <h1><i class="fa fa-database"></i> Manage Database</h1>
        </div>
    </div>

    </section>

    <!-- Main content -->
    <section class="content">

     <!-- INFORMATIONS -->
      <div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Backup Database</h3>
        </div>

        <div class="box-body">
          <div class="row">
          <div class="col-md-10"> 
            <div class="col-md-4">

              <p><a class="btn-export" href="backup/backup.php"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>Export</a></p>

            </div>
        
          </div>
        </div>
      </div>
          <!-- /.row -->
      </div>
        <!-- /.box-body -->

      <div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Restore Database</h3>
        </div>

        <div class="box-body">
          <div class="row">
          <div class="col-md-10"> 
            <div class="col-md-4">

                  <div>
                            <input type="file" name="backup_file" class="input-file" />
                        </div>
                        <div>
                            <br>
                            <p><a class="btn btn-success btn-lg" type="submit" name="restore"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>Import</a></p>
                        </div>

            </div>
                <?php
                    if (! empty($response)) {
                        ?>
                <div class="response <?php echo $response["type"]; ?>
                    ">
                    <?php echo nl2br($response["message"]); ?>
                </div>
                <?php
                    }
                    ?>
          </div>
        </div>
      </div>
          <!-- /.row -->
      </div>
    </div>
  </div>
 
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
