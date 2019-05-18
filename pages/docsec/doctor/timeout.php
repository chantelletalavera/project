<?php
include 'session.php';
include '../../../connection.php';
include 'timezone.php';


if(isset($_POST['patient'])){
    
    $date_now = date('Y-m-d');
    $finaldiagnosis = $_POST['finaldiagnosis'];
    $med = $_POST['med'];



    $sqlx = $conn->query("UPDATE tbl_diagnosis SET fld_primary = '$finaldiagnosis', fld_med = '$med', fld_status = '1' WHERE fld_casenumber = '".$_GET['case']."' ");



    $sql = "SELECT * FROM tbl_timerecord WHERE fld_date = '$date_now' AND fld_timeid = '".$_GET['id']."'";
    $query = $conn->query($sql);

    if($query->num_rows > 0){

      $sqly = "UPDATE tbl_timerecord SET fld_timeout = NOW() WHERE fld_timeid= '".$_GET['id']."'";
      $conn->query($sqly);

            
         echo "<script>window.location = 'appointment.php';</script>";

    }

  }

?>