<?php
   include 'session.php';
   include '../../../connection.php';
   include 'timezone.php';
   include 'user-index.php';
   
   if(isset($_POST['patient'])){
   
          $patient = $_POST['patient'];
          $doc = $_SESSION['id'];
   
           $query2 = $conn->query("SELECT * FROM `tbl_diagnosis` WHERE CONCAT(`fld_patientID`, `fld_patientfname`, ' ',`fld_patientmname`, ' ', `fld_patientlname`) LIKE '%$patient%' AND fld_doctorname = '$doc' AND fld_status = '1'");
             
             if (mysqli_num_rows($query2) > 0) {
                         while ($row = $query2->fetch_assoc()) {
                           $patientID = $row['fld_patientID'];
                         }
           $date_now = date('Y-m-d');
   
             $sql = "INSERT INTO tbl_timerecord (fld_patientID, fld_date, fld_timein,fld_userlevel) VALUES ('$patientID', '$date_now', NOW(), '".$_SESSION['id']."')";
               $conn->query($sql);
   
   
                echo "<script>window.location = 'info.php?id=$patientID&case=$case';</script>";
   
           }else{
           echo '<script>
           setTimeout(function() {
               swal({
                   title: "No Record",
                   text: "Patient Not Found!",
                   type: "warning"
               }, function() {
                   window.location = "user-index.php";
               });
              }, 100);
           </script>';         
       }
   
                  
   
         }
   
   ?>