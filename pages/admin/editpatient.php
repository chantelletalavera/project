<?php
    include 'layout/master.php';
    include '../../connection.php';
    ?>
  
  <style type="text/css">
    .inputWithIcon input[type=text]{
    padding-left:40px;
    }
    .inputWithIcon{
    position:relative;
    }
    .inputWithIcon i{
    position:absolute;
    left:22;
    top:23px;
    padding:9px 8px;
    color:#aaa;
    transition:.3s;
    }
    .inputWithIcon2 i{
    position:absolute;
    left:22;
    top:45px;
    padding:9px 8px;
    color:#aaa;
    transition:.3s;
    }
    .inputWithIcon input[type=text]:focus + i{
    color:dodgerBlue;
    }
    .inputWithIcon.inputIconBg i{
    background-color:#aaa;
    color:#fff;
    padding:9px 4px;
    border-radius:4px 0 0 4px;
    }
    .inputWithIcon.inputIconBg input[type=text]:focus + i{
    color:#fff;
    background-color:dodgerBlue;
    }

    .header{
      background-image: url(../../images/bgg.png);
      text-align:left;
      padding:5px;
    }
</style>
 <!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class = "header" >
      <h1>
        Edit Patient
      </h1>
      <ol class="breadcrumb" style = "background-image: url(../../images/bgg.png);">
        <li><a href="patientmanagement.php"><i class="fa fa-h-square"></i> Patient Management</a></li>
        <li><a><i class="fa fa-edit"></i>Edit Patient</a></li>
      </ol>
    </div>
    </section>

    <!-- Main content -->
    <section class="content">

       <?php

          $view = $conn->query("SELECT * from tbl_patientpersonalrecords WHERE fld_patientID ='".$_GET['edit_id']."'");
          while($row =mysqli_fetch_array($view)){
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
          
        ?>

<form method = "POST" enctype="multipart/form-data" action = "edit-patient-script.php?edit_id=<?php echo $patientID; ?>">

     
            <!--Picture and ID -->
    <div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Patient Picture</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="form-group col-md-4">
                <div class="text-center">
                    <?php echo "<img id='picture' height='150' width='150' src='../../patientimage/".$patientimage."' style='border: 3px solid; margin-top: -30px;'>;"?>
                            <figcaption class="figure-caption">Patient Picture</figcaption>
                            <div class="btn btn-default btn-file">
                            <i class="fa fa-paperclip"></i> Upload Picture
                            <input type="file" id="file_document" name="patientimage" onchange="uploadPic(this)">
                            </div>
                </div>
            </div>
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Patient ID</label>
                <input type="text" class = "form-control" value = "<?php echo $patientID; ?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>
   
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>

     <!-- INFORMATIONS -->
      <div class="box box-default" style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Patient Information</h3>
        </div>
        <!-- /.box-header -->
    
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Firstname</label>
                <input type="text" class = "form-control" name="patientfname" value = "<?php echo $patientfname; ?>">
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Middlename</label>
                <input type="text" class = "form-control" name="patientmname" value = "<?php echo $patientmname;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Lastname</label>
                <input type="text" class = "form-control" name="patientlname" value = "<?php echo $patientlname;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-8">
              <div class="form-group">
                <label style = "color:black;">Address</label>
                <input type="text" class = "form-control" name="patientadd" value = "<?php echo $patientadd;?>">
              </div>
              <!-- /.form-group -->
            </div>
        </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Age</label>
                <input type="text" class = "form-control" id = "age" name="patientage" value = "<?php echo $patientage;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4 inputWithIcon">
              <div class="form-group">
                <label style = "color:black;">Date of Birth</label>
                <input type="text" class = "form-control" id ="birthdate" name="patientdob" value = "<?php echo $patientdob;?>">
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Religion</label>
                <input type="text" class = "form-control" name="patientreligion" value = "<?php echo $patientreligion;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Nationality</label>
                <input type="text" class = "form-control" name="patientnation" value = "<?php echo $patientnation;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
              <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Status</label>
                <select class="form-control" name = "patientstatus">
                    <option><?php echo $patientstatus;?></option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                  </select>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Sex</label>
                <select class="form-control" name = "patientsex">
                    <option ><?php echo $patientgender;?></option>
                    <option value = Male>Male</option>
                    <option value ="Female">Female</option>
                  </select>
              </div>
              <!-- /.form-group -->
            </div>
            </div>

            <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Occupation</label>
                <input type="text" class = "form-control" name="patientoccupation" value = "<?php echo $patientoccupation;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Tel No.</label>
                <input type="text" class = "form-control" name="patienttelno" value = "<?php echo $patientnumber;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Father's Name</label>
                <input type="text" class = "form-control" name="patientfather" value = "<?php echo $patientfather;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Mother's Name</label>
                <input type="text" class = "form-control" name="patientmother" value = "<?php echo $patientmother;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Spouse's Name</label>
                <input type="text" class = "form-control" name="patientspouse" value = "<?php echo $patientspouse;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Spouse Address</label>
                <input type="text" class = "form-control" name="patientspouseadd" value = "<?php echo $patientspouseadd;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
 

             <!-- Other INFORMATIONS -->
      <div class="box box-default" style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Other Information</h3>

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
                <label style = "color:black;">Service</label>
                <input type="text" class = "form-control" name="patientservice" value = "<?php echo $patientservice;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Company</label>
                <input type="text" class = "form-control" name="patientcompany" value = "<?php echo $patientcompany;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Type of Case</label>
                <input type="text" class = "form-control" name="patientcase" value = "<?php echo $patientcase;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Senior Citizen ID No.</label>
                <input type="text" class = "form-control" name="patientseniorid" value = "<?php echo $patientseniorid;?>">
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">HMO</label>
                <input type="text" class = "form-control" name="patienthmo" value = "<?php echo $patienthmo;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Philhealth Membership</label>
                <input type="text" class = "form-control" name="patientphilhealth" value = "<?php echo $patientphil;?>">
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Blood Pressure</label>
                <input type="text" class = "form-control" name="patientbloodp" value = "<?php echo $patientbp;?>">
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Temperature</label>
                <input type="text" class = "form-control" name="patienttemp" value = "<?php echo $patienttemp;?>">
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Weight</label>
                <input type="text" class = "form-control" name="patientweight" value = "<?php echo $patientweight;?>">
              </div>
              <!-- /.form-group -->
            </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
  </div>
</div>
  <div>
    <a href = "patientmanagement.php" class = "btn btn-danger" style = "float:left;">Cancel</a>
   <button type = "submit" class = "btn btn-primary" style = "float:right;">UPDATE</button>
 </div>


</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="../../sweet-alert/dist/sweetalert-dev.js"></script>
 <!-- Start datepicker here -->
        <link rel="stylesheet" type="text/css" href="../../bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
        <script src="../../bootstrap-datetimepicker/dependent/collapse.js"></script>
        <script src="../../bootstrap-datetimepicker/dependent/moment.min.js"></script>
        <script src="../../bootstrap-datetimepicker/dependent/transition.js"></script>
        <script src="../../bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- End datepicker here -->

   <script type="text/javascript">
    
        function uploadPic(input){
         console.log(input);
         if (input.files && input.files[0]) {
           var reader = new FileReader();
       
           reader.onload = function (e) {
             $('#picture').attr('src', e.target.result)
           };
       
           reader.readAsDataURL(input.files[0]);
         }
       }

    $(document).ready(function() {
     $("#birthdate, #s_birthdate").datetimepicker({
         sideBySide: true,
         format: 'MM-DD-YYYY',
         useCurrent: false,
     });
     $('.fa-calendar').click(function() {
       $("#birthdate").focus();
     });
    });

      $("#birthdate").on("dp.change", function (e) {
            var currentDate = new Date(); 
             var selectedDate = new Date($(this).val()); 
             var age = currentDate.getFullYear() - selectedDate.getFullYear(); 
             var m = currentDate.getMonth() - selectedDate.getMonth(); 
             if (m < 0 || (m === 0 && currentDate.getDate() < selectedDate.getDate())) { 
                 age--; 
             } 
             $('#age').val(age);
       });

  </script>

