 <?php  
 include '../../connection.php';
 include 'usermanagement.php';
 
 if(isset($_POST)){
     $fname       = $_POST["firstname"]; 
     $mname      = $_POST["middlename"];   
     $lname   = $_POST["lastname"];  
     $uname   = $_POST["username"];  
     $pword    = $_POST["password"];


        $query = $conn->query("UPDATE tbl_users SET 
        fld_fname             = '$fname',
        fld_mname        = '$mname',
        fld_lname       = '$lname',
        fld_username       = '$uname',
        fld_password      =  DES_ENCRYPT('$pword')
        WHERE 
        fld_id                 = '".$_GET['update_id']."'");

        if($query){
          echo '<script>
          setTimeout(function() {
            swal({
                title: "Successfull!",
                text: "Successfully Updated!",
                type: "success"
            }, function() {
                window.location = "usermanagement.php";
            });
           }, 50);
        </script>';
        }else{
          echo '<script>
          setTimeout(function() {
            swal({
                title: "ALERT!",
                text: "Failed to Update!",
                type: "warning"
            }, function() {
                window.location = "usermanagement.php";
            });
           }, 100);
        </script>';
        }

  }  
 ?>
