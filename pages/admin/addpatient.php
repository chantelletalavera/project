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

    .formcontrol{
      color:black;
    }

    #qrbox>div {
            margin: auto;
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
        Add Patient
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

<form action ="add-patient-script.php"  method = "POST" enctype="multipart/form-data">
    	    <!--Picture and ID -->
   	<div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Patient Picture</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body" background = "../../images/bgg.png">
          <div class="row">
            <div class="form-group col-md-4">
              	<div class="text-center">
                    <img id="picture" height="150" width="150" src="../../images/default-patient-profile-picture.jpg" style="border: 3px solid; margin-top: -30px;">
                     		<figcaption class="figure-caption">Patient Picture</figcaption>
                     		<div class="btn btn-default btn-file">
                  			<i class="fa fa-paperclip"></i> Upload Picture
                  			<input type="file" id="file_document" name="patientimage" onchange="uploadPic(this)">
                			</div>
                </div>
            </div>
   
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
	</div>

     <!-- INFORMATIONS -->
      <div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Patient Information</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Firstname
                <input type="text" class = "form-control" name="patientfname" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Middlename
                <input type="text" class = "form-control" name="patientmname" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Lastname
                <input type="text" class = "form-control" name="patientlname" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label style = "color:black;">Address</label>
                <input type="text" class = "form-control" name="patientadd">
              </div>
              <!-- /.form-group -->
            </div>
        </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Age
                <input type="text" class = "form-control" id = "age" name="patientage" readonly>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4 inputWithIcon">
              <div class="form-group">
                <label style = "color:black;">Date of Birth
                <input type="text" class = "form-control" id ="birthdate" name="patientdob">
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Religion
                <input type="text" class = "form-control" name="patientreligion">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Nationality
                <input type="text" class = "form-control" name="patientnation">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Status</label>
                <select class="form-control" name = "patientstatus">
                    <option></option>
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
                    <option></option>
                    <option value = Male>Male</option>
                    <option value ="Female">Female</option>
                  </select>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Occupation
                <input type="text" class = "form-control" name="patientoccupation">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Tel No.
                <input type="text" class = "form-control" name="patienttelno">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Father's Name
                <input type="text" class = "form-control" name="patientfather">
              </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Mother's Name
                <input type="text" class = "form-control" name="patientmother">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Spouse's Name
                <input type="text" class = "form-control" name="patientspouse">
              </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Spouse Address
                <input type="text" class = "form-control" name="patientspouseadd">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>


             <!-- Other INFORMATIONS -->
      <div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
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
                <label style = "color:black;">Service
                <input type="text" class = "form-control" name="patientservice">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Company
                <input type="text" class = "form-control" name="patientcompany">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Type of Case
                <input type="text" class = "form-control" name="patientcase">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Senior Citizen ID No.
                <input type="text" class = "form-control" name="patientseniorid">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">HMO
                <input type="text" class = "form-control" name="patienthmo">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Philhealth Membership
                <input type="text" class = "form-control" name="patientphilhealth">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Blood Pressure
                <input type="text" class = "form-control" name="patientbloodp">
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Temperature
                <input type="text" class = "form-control" name="patienttemp">
                </label>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Weight
                <input type="text" class = "form-control" name="patientweight">
                </label>
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
   <button type =  "submit" class = "btn btn-primary" style = "float:right;">SAVE</button>
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