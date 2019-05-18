<?php

	include 'layout/master.php';

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

    #qrbox>div {
            margin: auto;
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
			</div>
			
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example1').DataTable( {
        lengthChange: false,
        buttons: ['excel', 'pdf']
    } );
 
    table.buttons().container()
        .appendTo( '#example1_wrapper .col-md-6:eq(0)' );
} );
</script>
    <div class="box">
           <div class="box-header with-border">
           <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Patient Activity Log</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Time In</th>
                  <th>Time Out</th>
				          <th>Duration</th>
                  <th>Visited</th>
                </tr>
                </thead>
                <tbody>
               <?php
                include('../../connection.php');
        
                $query=mysqli_query($conn,"SELECT * FROM tbl_timerecord WHERE fld_patientID ='".$_GET['id']."' AND fld_date='".$_GET['date']."'");
                while($row=mysqli_fetch_array($query)){
					$start_time = $row[3]; // pulled from DB
					$finish_time = $row[4]; // pulled from DB
					$starttime = strtotime($start_time); // convert to timestring
					$endtime = strtotime($finish_time); // convert to timestring
					$diff = ($endtime - $starttime); // do the math
                ?>
                <tr>
                <td><?php echo $row['fld_date']; ?></td>
                <td><?php echo $row['fld_timein']; ?></td>
                <td><?php echo $row['fld_timeout']; ?></td>tr
				<td><?php echo date('h:i:s', $diff); ?></td>
				<td><?php echo $row['fld_userlevel'], '&nbsp' , $row['fld_doctor']; ?></td>
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
	<div class="box">
        <div class="box-header with-border">
           <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Gantt Chart</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
		<?php  
		include '../../connection.php';

    $queryg=mysqli_query($conn,"SELECT * FROM tbl_timerecord WHERE fld_patientID ='".$_GET['id']."' AND fld_date='".$_GET['date']."'");
    while($grow=mysqli_fetch_array($query)){
      $in = $grow['fld_timein'];
      $out = $grow['fld_timeout'];
      $date = $grow['fld_date'];
      $visit = $grow['fld_userlevel'];
      $doctor = $grow['fld_doctor'];
    }
		?>  
       <div class="box-body chart-responsive">
              <div class="chart" id="chart_div" style=" height:500px; position: relative;"></div>
			  <br>
            </div>
            <!-- /.box-body -->
          </div>
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">  
 google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);

    function toMilliseconds(minutes) {
      return minutes * 60 * 1000;
    }

    function drawChart() {

      var otherData = new google.visualization.DataTable();
      otherData.addColumn('string', 'Task ID');
      otherData.addColumn('string', 'Task Name');
      otherData.addColumn('string', 'Resource');
      otherData.addColumn('date', 'Start');
      otherData.addColumn('date', 'End');
      otherData.addColumn('number', 'Duration');
      otherData.addColumn('number', 'Percent Complete');
      otherData.addColumn('string', 'Dependencies');

      otherData.addRows([
        ['toTrain', 'Walk to train stop', 'walk', null, null, toMilliseconds(5), 100, null],
        ['music', 'Listen to music', 'music', null, null, toMilliseconds(70), 100, null],
        ['wait', 'Wait for train', 'wait', null, null, toMilliseconds(10), 100, 'toTrain'],
        ['train', 'Train ride', 'train', null, null, toMilliseconds(45), 75, 'wait'],
        ['toWork', 'Walk to work', 'walk', null, null, toMilliseconds(10), 0, 'train'],
        ['work', 'Sit down at desk', null, null, null, toMilliseconds(2), 0, 'toWork'],

      ]);

      var options = {
        height: 275,
        gantt: {
          defaultStartDateMillis: new Date(2015, 3, 28)
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

      chart.draw(otherData, options);
    }

</script>