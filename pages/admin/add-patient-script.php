<?php  
include('../../connection.php');
include('patientmanagement.php');
include('timezone.php');

  if(isset($_POST)){


    $pfname = $_POST['patientfname'];
    $pmname = $_POST['patientmname'];
    $plname = $_POST['patientlname'];
    $paddress = $_POST['patientadd'];
    $page = $_POST['patientage'];
    $pdob = $_POST['patientdob'];
    $preligion = $_POST['patientreligion'];
    $pnationality = $_POST['patientnation'];
    $pstatus = $_POST['patientstatus'];
    $pgender = $_POST['patientsex'];
    $poccupation = $_POST['patientoccupation'];
    $pnumber = $_POST['patienttelno'];
    $pfather = $_POST['patientfather'];
    $pmother = $_POST['patientmother'];
    $pspouse = $_POST['patientspouse'];
    $psaddress = $_POST['patientspouseadd'];
    $pservice = $_POST['patientservice'];
    $pcompany = $_POST['patientcompany'];
    $pcase = $_POST['patientcase'];
    $psId = $_POST['patientseniorid'];
    $phmo = $_POST['patienthmo'];
    $pphilhealth = $_POST['patientphilhealth'];
    $pbp = $_POST['patientbloodp'];
    $ptemperature = $_POST['patienttemp'];
    $pweight = $_POST['patientweight'];


$target = "../../patientimage/".basename($_FILES['patientimage']['name']);   
$image = $_FILES['patientimage']['name'];

    $sql = $conn->query("INSERT INTO tbl_patientpersonalrecords VALUES ('','Null','$image','$pfname','$pmname','$plname','$paddress','$page','$pdob','$preligion','$pnationality','$pstatus','$pgender','$poccupation','$pnumber','$pfather','$pmother','$pspouse','$psaddress','$pservice','$pcompany','$pcase','$psId','$phmo','$pphilhealth','$pbp','$ptemperature','$pweight', NOW())");


    if ($sql) {
        move_uploaded_file($_FILES['patientimage']['tmp_name'], $target);

              $query_get_last_id = $conn->query("SELECT * FROM tbl_patientpersonalrecords");
              while ($row_last_id = $query_get_last_id->fetch_assoc()) {      
                $id_for_items = $row_last_id['fld_id'];
             }
             
             $new_id      =  $id_for_items;
             $patientID = "P-".date("dmy").$new_id;
             //TRANSACTION CODE

            $conn->query("UPDATE tbl_patientpersonalrecords SET fld_patientID='$patientID' WHERE fld_id='$new_id'");

      echo '<script>
        setTimeout(function() {
            swal({
                title: "Successful!",
                text: "Record Added!",
                type: "success"
            }, function() {
                window.location = "patientmanagement.php";
            });
           }, 100);
        </script>';         
      }else{
        echo '<script>
        setTimeout(function() {
            swal({
                title: "Alert!",
                text: "Record Not Added!",
                type: "error"
            }, function() {
                window.location = "patientmanagement.php";
            });
           }, 100);
        </script>';         
      }
  }  


?>