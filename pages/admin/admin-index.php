
<?php include 'layout/master.php';?>


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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        STATISTICS
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Charts</a></li>
        <li class="active">ChartJS</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
              <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
           <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Disease Statistics</h3>

          <!--<div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>-->
        </div>
        <div class="box-body">

        <div class="col-md-10">
              <div class="col-md-4 inputWithIcon">
              <div class="form-group">
                <label style = "color:black;">Date Start</label>
                <input type="text" class = "form-control" id ="startdate">
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4 inputWithIcon">
              <div class="form-group">
                <label style = "color:black;">Date End</label>
                <input type="text" class = "form-control" id ="enddate">
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

          <div class="col-md-10">
		  <?php  
		include '../../connection.php';  
		$query2 = "SELECT fld_finaldiagnosis, count(*) as number FROM tbl_diagnosis GROUP BY fld_finaldiagnosis";  
		$result2 = mysqli_query($conn, $query2);  
		?>
             <div class="col-md-15">
              <div class="form-group">
                 <div id="top_x_div" style="width: 500px; height: 500px;"></div>
               </div></div></div>
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>


        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-danger">
        <div class="box-header with-border">
           <i class="fa fa-pie-chart"></i>
          <h3 class="box-title">Most Prescribe Medicines</h3>

          <!--<div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>-->
        </div>
              <?php  
		include '../../connection.php';  
		$query = "SELECT fld_med, count(*) as number FROM tbl_diagnosis GROUP BY fld_med";  
		$result = mysqli_query($conn, $query);  
		?>  
       <div class="box-body chart-responsive">
              <div class="chart" id="piechart" style=" height:640px; position: relative;"></div>
			  <br>
            </div>
            </div>
            <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <strong>Copyright &copy; </a>.</strong> All rights
    reserved.
  </footer>

 <!-- Start datepicker here -->
        <link rel="stylesheet" type="text/css" href="../../bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
        <script src="../../bootstrap-datetimepicker/dependent/collapse.js"></script>
        <script src="../../bootstrap-datetimepicker/dependent/moment.min.js"></script>
        <script src="../../bootstrap-datetimepicker/dependent/transition.js"></script>
        <script src="../../bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- End datepicker here -->

<!-- ChartJS -->
<script src="../../assets/bower_components/chart.js/Chart.js"></script>
<!-- FLOT CHARTS -->
<script src="../../assets/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../assets/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../assets/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../assets/bower_components/Flot/jquery.flot.categories.js"></script>

<!-- Morris.js charts -->
<script src="../../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Page script -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data2 = new google.visualization.arrayToDataTable([
          ['Disease', 'Percentage'],  
                          <?php  
                          while($row2 = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row2["fld_finaldiagnosis"]."', ".$row2["number"]."],";  
                          }  
                          ?>  
        ]);

        var options2 = {
          width: 800,
          legend: { position: 'none' },
          axes: {
            x: {
              0: { side: 'bottom'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart2 = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart2.draw(data2, google.charts.Bar.convertOptions(options2));
      };
    </script>


<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#startdate").datepicker();  
                $("#enddate").datepicker();  
           });  
           $('#filter').click(function(){  
                var startdate = $('#startdate').val();  
                var enddate = $('#enddate').val();  
                if(startdate != '' && enddate != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{startdate:startdate, enddate:enddate},  
                          success:function(data)  
                          {  
                               $('#top_x_div').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Medicine', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["fld_medicine"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
					 
				var options = {
				chartArea:{left:10,top:20,width:"90%",height:"90%"},
				'legend': {'position': 'right'}
				};
		
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data,options);  
           }  
           </script>  