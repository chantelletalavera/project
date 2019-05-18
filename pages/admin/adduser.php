<?php
	include('../../connection.php');
    include('usermanagement.php');
	
if(isset($_POST)){
     $fname    = $_POST["firstname"];  
     $mname    = $_POST["middlename"];
     $lname    = $_POST["lastname"]; 
     $username    = $_POST["username"];
     $password    = $_POST["password"];
     $userlevel    = $_POST["userlevel"];
     $doctor    = $_POST["doctor"];
     $department = $_POST["department"];

    $sql = $conn->query("SELECT * FROM tbl_users WHERE fld_username = '".$username."'");

    if(mysqli_num_rows($sql) > 0){

       echo '<script>
        setTimeout(function() {
            swal({
                title: "Alert!",
                text: "Username already Exist!",
                type: "error"
            }, function() {
                window.location = "usermanagement.php";
            });
           }, 100);
        </script>';

    }elseif($userlevel == 'Secretary'){
        $query = $conn->query("INSERT INTO tbl_users 
        VALUES('',
        '$username',
		 DES_ENCRYPT('$password'),
        '',
        '$fname',
        '$mname',
        '$lname',
        '$userlevel',
        '$doctor',
        ''
         )");
    }elseif($userlevel == 'Doctor'){
        $query = $conn->query("INSERT INTO tbl_users 
        VALUES('',
        '$username',
         DES_ENCRYPT('$password'),
        '$doctor',
        '$fname',
        '$mname',
        '$lname',
        '$userlevel',
        '',
        ''
         )");
    }else{
         $query = $conn->query("INSERT INTO tbl_users 
        VALUES('',
        '$username',
         DES_ENCRYPT('$password'),
        '',
        '$fname',
        '$mname',
        '$lname',
        '$userlevel',
        '',
        '$department'
         )");
    }
    if ($query) {
        echo '<script>
        setTimeout(function() {
            swal({
                title: "Successful!",
                text: "Successfully Added!",
                type: "success"
            }, function() {
                window.location = "usermanagement.php";
            });
           }, 100);
        </script>';
      }
  }

?>