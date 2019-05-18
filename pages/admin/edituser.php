<?php
	include 'layout/master.php';
	include '../../connection.php';
	?>
  <style type="text/css">
    /* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
  </style>
 <!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="padding-bottom:50px; background-image: url(../../images/bg1.png);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <?php

          $view = $conn->query("SELECT fld_id, fld_username, DES_DECRYPT(fld_password), fld_fname, fld_mname, fld_lname from tbl_users  WHERE fld_id ='".$_GET['user_id']."'");
          while($row =mysqli_fetch_array($view)){
            $uid = $row[0];
            $ufname = $row[3];
            $umname = $row[4];
            $ulname = $row[5];
            $uname = $row[1];
            $upword = $row[2];
          }
          
        ?>

<form action ="edit-user-script.php?update_id=<?php echo $uid; ?>"  method = "POST" enctype="multipart/form-data">

     <!-- INFORMATIONS -->
      <div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">User Information</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          <div class="col-md-10"> 
            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Firstname
                <input type="text" class = "form-control" name="firstname" value = "<?php echo $ufname; ?>" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Middlename
                <input type="text" class = "form-control" name="middlename" value = "<?php echo $umname; ?>" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Lastname
                <input type="text" class = "form-control" name="lastname" value = "<?php echo $ulname; ?>" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>
        </div>
      </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Username
                <input type="text" class = "form-control" name = "username" value = "<?php echo $uname; ?>" name="username">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Password
                <input type="password" id = "pass" class = "form-control" name = "password"  value = "<?php echo $upword; ?>"name="password">
                </label>
                <div>
                  <label class = "container" style = "color:black"> Show Password
                <input type = "checkbox" onchange="document.getElementById('pass').type = this.checked ? 'text' : 'password'">
                <span class = "checkmark"></span>
              </label>
              </div>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    <div>
    <a href = "usermanagement.php" class = "btn bg-maroon margin" style = "float:left;">Cancel</a>
   <button type =  "submit" class = "btn bg-olive margin" style = "float:right;">SAVE</button>
    </div>
    </div>
  </div>
 
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
