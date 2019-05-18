 <?php  
include '../../connection.php';
include 'patientmanagement.php';
 if(isset($_POST)){
    
    $pfname         = $_POST['patientfname'];
    $pmname         = $_POST['patientmname'];
    $plname         = $_POST['patientlname'];
    $paddress       = $_POST['patientadd'];
    $page           = $_POST['patientage'];
    $pdob           = $_POST['patientdob'];
    $preligion      = $_POST['patientreligion'];
    $pnationality   = $_POST['patientnation'];
    $pstatus        = $_POST['patientstatus'];
    $pgender        = $_POST['patientsex'];
    $poccupation    = $_POST['patientoccupation'];
    $pnumber        = $_POST['patienttelno'];
    $pfather        = $_POST['patientfather'];
    $pmother        = $_POST['patientmother'];
    $pspouse        = $_POST['patientspouse'];
    $psaddress      = $_POST['patientspouseadd'];
    $pservice       = $_POST['patientservice'];
    $pcompany       = $_POST['patientcompany'];
    $pcase          = $_POST['patientcase'];
    $psId           = $_POST['patientseniorid'];
    $phmo           = $_POST['patienthmo'];
    $pphilhealth    = $_POST['patientphilhealth'];
    $pbp            = $_POST['patientbloodp'];
    $ptemperature   = $_POST['patienttemp'];
    $pweight        = $_POST['patientweight'];

$target = "../../patientimage/".basename($_FILES['patientimage']['name']);   
$image = $_FILES['patientimage']['name'];

        $query = $conn->query("UPDATE tbl_patientpersonalrecords SET
        fld_patientimage                = '$image'
        fld_patientfname                = '$pfname',
        fld_patientmname                = '$pmname',
        fld_patientlname                = '$plname',
        fld_patientladdress             = '$paddress',
        fld_patientage                  = '$page',
        fld_patientdob                  = '$pdob',
        fld_patientreligion             = '$preligion',
        fld_patientnationality          = '$pnationality',
        fld_patientstatus               = '$pstatus',
        fld_patientgender               = '$pgender',
        fld_patientoccupation           = '$poccupation',
        fld_patientnumber               = '$pnumber',
        fld_patientfather               = '$pfather',
        fld_patientmother               = '$pmother',
        fld_patientspouse               = '$pspouse',
        fld_patientspouseaddress        = '$psaddress',
        fld_patientservice              = '$pservice',
        fld_patientcompany              = '$pcompany',
        fld_patientcase                 = '$pcase',
        fld_patientseniorID             = '$psId',
        fld_patienthmo                  = '$phmo',
        fld_patientphilhealth           = '$pphilhealth',
        fld_patientbp                   = '$pbp',
        fld_patienttemperature          = '$ptemperature',
        fld_patientweight               = '$pweight'
        WHERE 
        fld_patientID                 = '".$_GET['edit_id']."'");


        if ($query) {
        move_uploaded_file($_FILES['patientimage']['tmp_name'], $target);

        echo '<script>
        setTimeout(function() {
            swal({
                title: "Successful!",
                text: "Succesfully Updated!",
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
                text: "Update Failed!",
                type: "error"
            }, function() {
                window.location = "patientmanagement.php";
            });
           }, 100);
        </script>';
        }      
  }  
 ?>
