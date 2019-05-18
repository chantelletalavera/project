<?php
  include 'session.php';
  include 'layout/master.php';
?>
<style type="text/css">
    .header{
      background-image: url(../../../images/bgg.png);
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
  <link rel="stylesheet" href="../../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../../text/css" href="sweet-alert/themes/google/google.css">
<!-- DataTables -->
  <link rel="stylesheet" href="../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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
              <h3 class="box-title">List of Patients</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Patient ID</th>
                  <th>Patient Name</th>
                  <th>Date</th>
                  <th>Case</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include('../../../connection.php');

                $doc = $conn->query("SELECT * FROM tbl_users WHERE fld_id = '".$_SESSION['id']."' ");
                while($drow = mysqli_fetch_array($doc)){
                  $dc = $drow['fld_doctor'];
                }
        
                $query=mysqli_query($conn,"select * from tbl_diagnosis WHERE fld_doctorname = '$dc' and fld_status = '1' order by fld_date asc");
                while($row=mysqli_fetch_array($query)){
                ?>

                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[4], ',&nbsp' ,  $row[2], '&nbsp', $row [3]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td>
                <a href="view-patient.php?view_id=<?php echo $row[1]; ?>" id = "view" class="btn btn-success"><span class="fa fa-eye"></span> Information</a>
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

  <script src="../../../sweet-alert/dist/sweetalert-dev.js"></script>
  <!-- DataTables -->
<script src="../../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

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