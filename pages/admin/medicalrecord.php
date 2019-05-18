 <?php

	include 'layout/master.php';

?>

<!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">
<!-- DataTables -->
  <link rel="stylesheet" href="../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-bottom:50px; background-image: url(../../images/bg1.png);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Medical Records
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->

      <?php

          include '../../connection.php';

          $view = $conn->query("SELECT * from tbl_patientpersonalrecords WHERE fld_patientID ='".$_GET['id']."'");
          while($row =mysqli_fetch_array($view)){
            $patientID = $row[1];
            $patientfname = $row[3];
            $patientmname = $row[4];
            $patientlname = $row[5];
          }
          
        ?>
    <div class="box"  >
            <div class="box-header">
              <h1 class="box-title"><label style = "color:gray;">Patient Name: </label> <?php echo $patientlname, ',&nbsp', $patientfname, '&nbsp', $patientmname; ?></h1>
              <h4> <label style = "color:gray;">ID:</label> <?php echo $patientID; ?> </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Case Number</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include('../../connection.php');
        
                $query=mysqli_query($conn,"select * from tbl_diagnosis WHERE fld_patientID = '".$_GET['id']."' order by fld_date desc");
                while($row=mysqli_fetch_array($query)){
                ?>

                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td>
                <a href="view-patient.php?view_id=<?php echo $row[1]; ?>" id = "view" class="btn btn-success"><span class="fa fa-eye"></span> Information</a>||
                <a href="gantt.php?id=<?php echo $row[1];?>&date=<?php echo $row[5];?>" id = "record" class="btn btn-info"><span class="fa fa-h-square"></span> View Gantt Chart</a>

                </td>

                  </tr>
                  <?php
                }
                ?>
                 
                 
                </tbody>
              </table>
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