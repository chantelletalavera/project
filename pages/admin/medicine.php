<?php 
include 'layout/master.php';
?>

<?php

	include 'layout/master.php';

?>
<style type="text/css">
    .header{
      background-image: url(../../images/bgg.png);
      text-align:left;
      padding:5px;
    }

@media{
  #view{
  }

  #record{
  }

  #edit{
  }

  #delete{
  }

}

</style>

<!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">
<!-- DataTables -->
  <link rel="stylesheet" href="../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-bottom:50px; background-image: url(../../images/bg1.png);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class = "header">
      <h2>
        Patient Management
      </h2>
    </div>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="box"  >
            <div class="box-header">
              <h3 class="box-title">Medicines</h3>
              <a type="button" href = "addpatient.php" class="btn bg-olive btn-flat margin" style= "margin-left: 50px; width: 5%; float:right;">
                <i class = "fa fa-plus"></i>
              </a>
            </div>

            <div class="col-md-6">
            	<div class = "form-group">
            		<div class = "col-md-5">
            		<label> Add Medicine </label>
            		<input type = "text" class = "form-control">
            		</div>
            	</div>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
            <div class = "col-md-6">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Available Medicines</th>
                </tr>
                </thead>
                <tbody>

               	<?php
                include('../../connection.php');
        
                $query=mysqli_query($conn,"SELECT * FROM tbl_med ORDER BY fld_genericname desc");
                while($row=mysqli_fetch_array($query)){
                ?>
                <td><?php echo $row[1], ' - ', $row[2]; ?></td>
            </tr>
              	<?php
              }
              ?>
                </tbody>
              </table>
          		</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="../../sweet-alert/dist/sweetalert-dev.js"></script>
  <!-- DataTables -->
<script src="../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>