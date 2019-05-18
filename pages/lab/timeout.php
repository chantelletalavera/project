<?php
include 'session.php';
include '../../connection.php';
include 'timezone.php';


if(isset($_POST['patient'])){
    
    $date_now = date('Y-m-d');
    $patientID = $_GET['patient'];

    $patient = $conn->query("SELECT * FROM tbl_patientpersonalrecords WHERE fld_patientID = '$patientID'");
    while($srow =mysqli_fetch_array($patient)){
    $pfname = $srow['fld_patientfname'];
    $pmname = $srow['fld_patientmname'];
    $plname = $srow['fld_patientlname'];
    }

    $sql = "SELECT * FROM tbl_timerecord WHERE fld_date = '$date_now' AND fld_timeid = '".$_GET['id']."'";
    $query = $conn->query($sql);

    $patient = "INSERT INTO tbl_lab VALUES ('','$patientID','$pfname','$pmname','$plname','$date_now')";
    	$conn->query($patient);

    $sql = "SELECT * FROM tbl_timerecord WHERE fld_date = '$date_now' AND fld_timeid = '".$_GET['id']."'";
    $query = $conn->query($sql);

    if($query->num_rows > 0){

      $sqly = "UPDATE tbl_timerecord SET fld_timeout = NOW() WHERE fld_timeid= '".$_GET['id']."'";
      $conn->query($sqly);

            
         echo "<script>window.location = 'user-index.php';</script>";

    }

  }

?>