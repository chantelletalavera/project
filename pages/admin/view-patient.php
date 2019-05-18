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

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class = "header">
      <h3>
        View Patient
      </h3>
    </div>

    </section>

    <!-- Main content -->
    <section class="content">

<form method = "POST" enctype="multipart/form-data">

     
    	    <!--Picture and ID -->
   	<div class="box box-default"  style="padding-bottom:50px; background-image: url(../../images/bgg.png);">
        <div class="box-header with-border">
          <h3 class="box-title">Patient Picture</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

         <?php

          $view = $conn->query("SELECT * from tbl_patientpersonalrecords WHERE fld_patientID ='".$_GET['view_id']."'");
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

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="form-group col-md-4">
              	<div class="text-center">
                    <?php echo "<img id='picture' height='150' width='150' src='../../patientimage/".$patientimage."' style='border: 3px solid; margin-top: -30px;'>;"?>
                </div>
            </div>
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Patient ID</label>
                <input type="text" class = "form-control" name="patientID" value = "<?php echo $patientID; ?>" readonly>
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

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Firstname</label>
                <input type="text" class = "form-control" value = "<?php echo $patientfname; ?>" name="patientfname" readonly>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Middlename</label>
                <input type="text" class = "form-control" name="patientmname" value = "<?php echo $patientmname;?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Lastname</label>
                <input type="text" class = "form-control" name="patientlname" value = "<?php echo $patientlname;?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-8">
              <div class="form-group">
                <label style = "color:black;">Address</label>
                <input type="text" class = "form-control" name="patientadd" value = "<?php echo $patientadd;?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>
        </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Age</label>
                <input type="text" class = "form-control" id = "age" name="patientage" value = "<?php echo $patientage;?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4 inputWithIcon">
              <div class="form-group">
                <label style = "color:black;">Date of Birth</label>
                <input type="text" class = "form-control" id ="birthdate" name="patientdob" value = "<?php echo $patientdob;?>" readonly>
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Religion</label>
                <input type="text" class = "form-control" name="patientreligion" value = "<?php echo $patientreligion;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Nationality</label>
                <input type="text" class = "form-control" name="patientnation" value = "<?php echo $patientnation;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Status</label>
                <input type="text" class = "form-control"  value = "<?php echo $patientstatus;?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>

              <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Sex</label>
                <input type="text" class = "form-control"  value = "<?php echo $patientgender;?>" readonly>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Occupation</label>
                <input type="text" class = "form-control" name="patientoccupation" value = "<?php echo $patientoccupation;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Tel No.</label>
                <input type="text" class = "form-control" name="patienttelno" value = "<?php echo $patientnumber;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Father's Name</label>
                <input type="text" class = "form-control" name="patientfather" value = "<?php echo $patientfather;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Mother's Name</label>
                <input type="text" class = "form-control" name="patientmother" value = "<?php echo $patientmother;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Spouse's Name</label>
                <input type="text" class = "form-control" name="patientspouse" value = "<?php echo $patientspouse;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Spouse Address</label>
                <input type="text" class = "form-control" name="patientspouseadd" value = "<?php echo $patientspouseadd;?>"  readonly>
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
                <input type="text" class = "form-control" name="patientservice" value = "<?php echo $patientservice;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Company</label>
                <input type="text" class = "form-control" name="patientcompany" value = "<?php echo $patientcompany;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Type of Case</label>
                <input type="text" class = "form-control" name="patientcase" value = "<?php echo $patientcase;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Senior Citizen ID No.</label>
                <input type="text" class = "form-control" name="patientseniorid" value = "<?php echo $patientseniorid;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">HMO</label>
                <input type="text" class = "form-control" name="patienthmo" value = "<?php echo $patienthmo;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Philhealth Membership</label>
                <input type="text" class = "form-control" name="patientphilhealth" value = "<?php echo $patientphil;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Blood Pressure</label>
                <input type="text" class = "form-control" name="patientbloodp" value = "<?php echo $patientbp;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Temperature</label>
                <input type="text" class = "form-control" name="patienttemp" value = "<?php echo $patienttemp;?>"  readonly>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

           <div class="col-md-10">
             <div class="col-md-3">
              <div class="form-group">
                <label style = "color:black;">Weight</label>
                <input type="text" class = "form-control" name="patientweight" value = "<?php echo $patientweight;?>"  readonly>
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

