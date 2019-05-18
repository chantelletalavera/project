<?php
include 'session.php';
include 'layout/master.php';
include '../../../connection.php';
$date=date('M-d-Y-D');
$dt = new DateTime();
$timenow= date("h:ia");
?>


  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style = "float:center;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->

    <?php

          include '../../../connection.php';

          $med = $conn->query("SELECT * from tbl_patientpersonalrecords WHERE fld_patientID ='".$_GET['id']."'");
          while($row =mysqli_fetch_array($med)){
            $patientID = $row[1];
            $patientimage = $row[2];
            $patientfname = $row[3];
            $patientmname = $row[4];
            $patientlname = $row[5];
            $patientadd = $row[6];
            $patientage = $row[7];
            $patientdob = $row[8];
            $patientreligion = $row[9];
            $patientnation = $row[10];
            $patientstatus = $row[11];
            $patientgender = $row[12];
            $patientoccupation = $row[13];
            $patientnumber = $row[14];
            $patientfather = $row[15];
            $patientmother = $row[16];
            $patientspouse = $row[17];
            $patientspouseadd = $row[18];
            $patientservice = $row[19];
            $patientcompany = $row[20];
            $patientcase = $row[21];
            $patientseniorid = $row[22];
            $patienthmo = $row[23];
            $patientphil = $row[24];
            $patientbp = $row[25];
            $patienttemp = $row[26];
            $patientweight = $row[27];
          }

          $time = $med = $conn->query("SELECT * from tbl_timerecord");
          while($row =mysqli_fetch_array($med)){
            $timeid = $row[0];
          }


        ?>
    <form method = "POST" action = "timeout.php?id=<?php echo $timeid;?>&patient=<?php echo $patientID; ?>">

      <div class="box" style = "margin-top:0px; ">
        <div class="box-header with-border">
          <h1 class="box-title"><label style = "color:gray;">Patient Name: </label> <?php echo $patientlname, ',&nbsp', $patientfname, '&nbsp', $patientmname; ?></h1>
              <h4> <label style = "color:gray;">ID:</label> <?php echo $patientID; ?></h4>
    </div>
      </div>

      <div class="box" style = "margin-top:-50px; ">
        <div class="box-header with-border">
          <h3 class="box-title">Patient Information
              </h3>
        </div>

         <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class = "col-md-10">
              <div class="form-group">
                <label style = "color:black;">Complaint</label>
                <input type="text" class = "form-control"  name="complaint">
            </div>
   
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>

            

        <!-- /.box-body -->
    <div class="box-footer">
    <div>
      <button type =  "submit" name = "patient" class = "btn bg-olive margin" style = "float:right;">Submit</button>
    </div>
    </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; </a>.</strong> All rights
    reserved.
  </footer>

<!-- CK Editor -->
<script src="../../assets/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>