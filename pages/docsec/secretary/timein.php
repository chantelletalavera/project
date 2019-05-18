<?php
   include 'session.php';
   include '../../../connection.php';
   include 'timezone.php';
   include 'user-index.php';
   
   if(isset($_POST['patient'])){
   
          $patient = $_POST['patient'];
          $uid= $_SESSION['id'];

   
           $query2 = $conn->query("SELECT * FROM `tbl_patientpersonalrecords` WHERE CONCAT(`fld_patientID`, `fld_patientfname`, ' ',`fld_patientmname`, ' ', `fld_patientlname`) LIKE '%$patient%' ");
             
             if (mysqli_num_rows($query2) > 0) {
                         while ($row = $query2->fetch_assoc()) {
                           $patientID = $row['fld_patientID'];
                         }
           $date_now = date('Y-m-d');

          $doc = $conn->query("SELECT * from tbl_users WHERE fld_id= '$uid'");
          while($srow =mysqli_fetch_array($doc)){
          $ulevel = $srow['fld_userlevel'];
          $doctor = $srow['fld_doctor'];
          }
   
             $sql = "INSERT INTO tbl_timerecord (fld_patientID, fld_date, fld_timein,fld_userlevel,fld_doctor) VALUES ('$patientID','$date_now', NOW(), '$ulevel','$doctor')";
               $conn->query($sql);
   
   
                echo "<script>window.location = 'info.php?id=$patientID';</script>";
   
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