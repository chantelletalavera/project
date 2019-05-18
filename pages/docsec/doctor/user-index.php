<?php
include 'layout/master.php';
include '../../../connection.php';


?>
<style type="text/css">
  
  .fix{
    margin-top:150px;
  }

</style>

<!--sweetalerts-->
  <link rel="stylesheet" href="../../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../../text/css" href="sweet-alert/themes/google/google.css">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style = "float:center;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->

<div class = "fix">        
      <div class="box">
        <div class="box-header with-border">
           <i class="fa fa-search"></i>
          <h3 class="box-title">Search Patients</h3>
          <a type="button" href = "addpatienttime.php" class="btn bg-olive btn-flat margin" title = "Add Patient" style= "margin-left: 50px; width: 5%; float:right;">
                <i class = "fa fa-plus"></i>
              </a>
        </div>
           
    <form method = "POST" action = "timein.php">
        <div class="box-body">
        <label class="col-sm-5 control-label" style = "font-size: 20px; color:black;">Enter Patient ID </label>
        <div class="col-sm-10" style = "margin-top:0px;">
                    <input type = "text" style = "font-family: Arial;" name = "patient" class = "form-control" autofocus required>
          </div>
        </div>


    </form>

      
        <!-- /.box-body -->
        <div class="box-footer">
    </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; </a>.</strong> All rights
    reserved.
  </footer>

    <script src="../../../sweet-alert/dist/sweetalert-dev.js"></script>
