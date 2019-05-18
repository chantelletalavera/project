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


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GRAPH
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <i class="fa fa-bar-chart-o"></i>
          <h3 class="box-title">Disease Statistics</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
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
             <div class="col-md-15">
              <div class="form-group">
                 <div id="bar-chart-design" style="height: 300px;"></div>
               </div></div></div>
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

            <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <i class="fa fa-pie-chart"></i>
          <h3 class="box-title">Most Prescribe Medicines</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
       <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

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
<script>
  $(function () {


    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9], ['July', 10], ['August', 100], ['September', 50], ['October', 56]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart-design', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>


<script type="text/javascript">

    $(document).ready(function() {
     $("#startdate, #s_startdate").datetimepicker({
         sideBySide: true,
         format: 'MM-DD-YYYY',
         useCurrent: false,
     });
     $('.fa-calendar').click(function() {
       $("#startdate").focus();
     });
    });

      $(document).ready(function() {
     $("#enddate, #s_enddate").datetimepicker({
         sideBySide: true,
         format: 'MM-DD-YYYY',
         useCurrent: false,
     });
     $('.fa-calendar').click(function() {
       $("#enddate").focus();
     });
    });

</script>

<script>
  $(function () {
    "use strict";
    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a", "#215e36", "#cdd93c", "#631dd4", "#1dc9d4", "#1908e0", "#e0087d", "#e07008"],
      data: [
        {label: "Paracetamol", value: 12},
        {label: "Lagundi", value: 30},
        {label: "Advil", value: 3},
        {label: "Citirizine", value: 9},
        {label: "Ferrus", value: 20},
        {label: "Sumapen", value: 50},
        {label: "Anti-Biotic", value: 5},
        {label: "Mefanic", value: 25},
        {label: "Appetason", value: 23},
        {label: "Bioflu", value: 60}
      ],
      hideHover: 'auto'
    });
  });
</script>
