<?php
include 'session.php';
include '../../../connection.php';
include 'timezone.php';


if(isset($_POST['patient'])){


    $date_now = date('Y-m-d');
    $complaint = $_POST['complaint'];
    $uid= $_SESSION['id'];
    $patientID = $_GET['patient'];

    $patient = $conn->query("SELECT * FROM tbl_patientpersonalrecords WHERE fld_patientID = '$patientID'");
    while($srow =mysqli_fetch_array($patient)){
    $pfname = $srow['fld_patientfname'];
    $pmname = $srow['fld_patientmname'];
    $plname = $srow['fld_patientlname'];
    }


    $doc = $conn->query("SELECT * from tbl_users WHERE fld_id= '$uid'");
    while($srow =mysqli_fetch_array($doc)){
    $doctor = $srow['fld_doctor'];
    }

    $sqlx = $conn->query("INSERT INTO tbl_diagnosis VALUES ('','$patientID','$pfname','$pmname','$plname', '$date_now','','$complaint','','','$doctor', '0')");

    if ($sqlx) {

              $query_get_last_id = $conn->query("SELECT * FROM tbl_diagnosis");
              while ($row_last_id = $query_get_last_id->fetch_assoc()) {      
                $id_for_items = $row_last_id['fld_diagnosisid'];
             }
             
             $new_id      =  $id_for_items;
             $case = "C-".date("dmy").$new_id;
             //TRANSACTION CODE

            $conn->query("UPDATE tbl_diagnosis SET fld_casenumber='$case' WHERE fld_diagnosisid='$new_id'");
         }

    $sql = "SELECT * FROM tbl_timerecord WHERE fld_date = '$date_now' AND fld_timeid = '".$_GET['id']."'";
    $query = $conn->query($sql);

    if($query->num_rows > 0){

      $sqly = "UPDATE tbl_timerecord SET fld_timeout = NOW() WHERE fld_timeid= '".$_GET['id']."'";
      $conn->query($sqly);

            
         echo "<script>window.location = 'user-index.php';</script>";

    }

  }

?>