<?php
include 'layout/master.php';

?>
<style type="text/css">
      .header{
      background-image: url(../../images/bgg.png);
      text-align:left;
      padding:5px;
    }
</style>
<!-- DataTables -->
  <link rel="stylesheet" href="../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!--sweetalerts-->
  <link rel="stylesheet" href="../../sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="../../text/css" href="sweet-alert/themes/google/google.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class = "header">
      <h3>
        USER MANAGEMENT
      </h3>
    </div>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Users</h3>
              <a type="button" class="btn bg-olive btn-flat margin" style= "margin-left: 50px; width: 5%; float:right;" href = "add-user.php">
                <i class = "fa fa-plus"></i>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php
                include('../../connection.php');
        
                $query=mysqli_query($conn,"select * from tbl_users");
                while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $row['fld_username']; ?></td>
                <td><?php echo $row['fld_doctorname'], $row['fld_lname'], ',&nbsp' ,  $row['fld_fname'], '&nbsp', $row ['fld_mname'] ?></td>
                <td><?php echo $row['fld_userlevel']; ?></td>
                <td>
                  <center><a href = "edituser.php?user_id=<?php echo $row['fld_id']?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</a></center>
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

     

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy;  All rights
    reserved.
  </footer>


  <!-- DataTables -->
<script src="../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="../../sweet-alert/dist/sweetalert-dev.js"></script>

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