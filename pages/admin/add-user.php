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


    </section>

    <!-- Main content -->
    <section class="content">


<form action ="adduser.php"  method = "POST" enctype="multipart/form-data">

     <!-- INFORMATIONS -->
      <div class="box box-default"  style="padding-bottom:50px;">
        <div class="box-header with-border">
          <h3 class="box-title">Add User</h3>

        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
           <div class="col-md-10">
             <div class="col-md-4">
               <div class="form-group">
                  <label  class="col-sm-2 control-label" style = "font-size: 15px; color:black;">Role</label>
                  <select class="form-control" id = "ulevel" style = "color:black;" name = "userlevel">
                    <option></option>
                    <option value = "Staff">Staff</option>
                    <option value = "Secretary">Secretary</option>
                    <option value = "Doctor">Doctor</option>
                  </select>
              </div>
              <!-- /.form-group -->
            </div>

          </div>
        </div>
      </div>
    </div>

<div class="box box-default"  style="padding-bottom:50px;">
        <div class="box-header with-border">
          <h3 class="box-title">User Information</h3>

        
        </div>
        <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-10">
            <div class="col-md-8">
              <div id="sec" style="margin-top:60px;" class="form-group">
           
              </div>

              <div id="doc" style="margin-top:40px;" class="form-group">
           
              </div>

              <div id="staff" style="margin-top:-150px;" class="form-group">
           
              </div>
              <!-- /.form-group -->
            </div>
          </div>
            <!--<div id="doc" style="margin-top:-10%;" class="form-group">-->
      </div>
    </div>
  </div>


          <!-- /.row -->

        <!-- /.box-body -->
    <div class = "form-group">
    <a href = "usermanagement.php" class = "btn bg-maroon margin" style = "float:left;">Cancel</a>
   <button type =  "submit" class = "btn bg-olive margin" style = "float:right;">SAVE</button>
    </div>
</div>
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script type="text/javascript">
    $('#ulevel').on('change',function(){
    var x = this.value;
    $.post({
      url: 'secretary.php',
      data:{x:x},
      success: function(response){
        $('#sec').html(response);
      }
    })
  })

    $('#ulevel').on('change',function(){
    var y = this.value;
    $.post({
      url: 'doctor.php',
      data:{y:y},
      success: function(response){
        $('#doc').html(response);
      }
    })
  })


  $('#ulevel').on('change',function(){
    var z = this.value;
    $.post({
      url: 'staff.php',
      data:{z:z},
      success: function(response){
        $('#staff').html(response);
      }
    })
  })
</script>