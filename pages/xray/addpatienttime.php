<?php
include 'session.php';
include '../../connection.php';
include 'timezone.php';

  $date_now = date('Y-m-d');

 $sql = "INSERT INTO tbl_timerecord (fld_date,fld_timein,fld_userlevel) VALUES ('$date_now', NOW(), '".$_SESSION['id']."')";
 $result = $conn->query($sql);

      if($result){

      	$query = "SELECT * FROM tbl_timerecord";
      	$res = $conn->query($query);
      	while($row = mysqli_fetch_array($res)){
      		$id = $row['fld_timeid'];
      	}

      	echo "<script>window.location = 'addpatient.php?id=$id';</script>";

      }

            



?>