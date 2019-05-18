<?php
include 'session.php';
include '../../connection.php';
include 'timezone.php';


if(isset($_POST['patient'])){
    
    $date_now = date('Y-m-d');

    $sql = "SELECT * FROM tbl_timerecord WHERE fld_date = '$date_now' AND fld_timeid = '".$_GET['id']."'";
    $query = $conn->query($sql);

    if($query->num_rows > 0){

      $sqly = "UPDATE tbl_timerecord SET fld_timeout = NOW() WHERE fld_timeid= '".$_GET['id']."'";
      $conn->query($sqly);

            
         echo "<script>window.location = 'user-index.php';</script>";

    }

  }

?>