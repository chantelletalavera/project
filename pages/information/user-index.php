<?php
include 'layout/master.php';
include '../../connection.php';


?>
<style type="text/css">
  
  .fix{
    margin-top:0px;
  }

</style>

<!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">
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
           
    <form method="POST">
        <div class="box-body">
        <label class="col-sm-5 control-label" style = "font-size: 20px; color:black;"></label>
        <div class="col-sm-10" style = "margin-top:0px;">
                    <input type = "text" style = "font-family: Arial;" id = "patient" name = "patient" class = "form-control" placeholder = "Search....." autofocus required>
          </div>

          <table id = "tblSearchResults" class="table table-bordered table-striped" width = "100%" cellspacing = "0">
            <thead>
              <th>Patient ID</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Address</th>
            </thead>
          </table>
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

    
    <script src="../../sweet-alert/dist/sweetalert-dev.js"></script>
    <script src="../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type = "text/javascript">
      var tblSearchResults = $('#tblSearchResults').DataTable({
        ajax:{
            url: 'search-patient.php?q=all',
            dataSrc: '',
            serverside: true
        },
        columns: [
          {'data':'fld_patientID'},
          {'data':'name',
              render:function(data,type,name,meta){
                  return name.fld_patientfname + ' ' + name.fld_patientmname + ' ' + name.fld_patientlname;
              }
          },
          {'data':'fld_patientgender'},
          {'data':'fld_patientdob'},
          {'data':'fld_patientaddress'}
        ],
        pageLength: 5,
        deferRender: true

    });

      $(document).on('input','#patient',function(e){
        e.preventDefault();

        tblSearchResults.ajax.url('search-patient.php?q=search&patient='+$(this).val()).load();
      });
    </script>
