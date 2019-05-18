<?php
   include("connection.php");
   session_start();
 
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM tbl_users WHERE fld_username='$username' and DES_DECRYPT(fld_password) = '$password'";
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
      
      if($row['fld_userlevel'] == 'Admin'){
      
        $_SESSION['id'] = $row['userlevel'];
        header("location: pages/admin/admin-index.php");

      }elseif($row['fld_department'] == 'Information Desk' ){

        $_SESSION['id'] = $row['fld_department'];
        header("location: pages/information/user-index.php");

      }elseif($row['fld_department'] == 'X-RAY' ){

        $_SESSION['id'] = $row['fld_department'];
        header("location: pages/xray/user-index.php");

      }elseif($row['fld_userlevel'] == 'Doctor' ){
  
        $_SESSION['id'] = $row['fld_doctorname'];
        header("location: pages/docsec/doctor/appointment.php");

      }elseif($row['fld_userlevel'] == 'Secretary'){

        $_SESSION['id'] = $row['fld_id'];
        header("location: pages/docsec/secretary/user-index.php");

      }elseif($row['fld_department'] == 'Laboratory' ){

        $_SESSION['id'] = $row['fld_department'];
        header("location: pages/lab/user-index.php");
      
      }elseif($row['fld_department'] == 'Pharmacy'){

        $_SESSION['id'] = $row['fld_department'];
        header("location: pages/phar/user-index.php");

      }else{
       echo '<script>
        setTimeout(function() {
            swal({
                title: "Alert!",
                text: "Invalid Login Credentials!",
                type: "error"
            }, function() {
                window.location = "index.php";
            });
           }, 100);
        </script>';
  }       
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LUMED | Log in</title>
  <link rel="shortcut icon" href="images/lumedlogo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="assets/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="assets/dist/css/ripples.min.css">
  <link rel="stylesheet" href="assets/dist/css/MaterialAdminLTE.min.css">
  <!--sweetalerts-->
  <link rel="stylesheet" href="sweet-alert/dist/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="sweet-alert/themes/google/google.css">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body background="images/bgg.png">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><image class="img-responsive" src = "images/LUMED.png"/></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <form  method="POST">
      <div class="form-group has-feedback">
        <input type="text" name = "username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id = "pass" name = "password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-7">
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" name = "submit" class="btn btn-primary btn-raised btn-block btn-flat">Login</button>
        </div>
         <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="assets/dist/js/material.min.js"></script>
<script src="assets/dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!--sweetalert-->
<script src="sweet-alert/dist/sweetalert-dev.js"></script>
<!-- iCheck -->
<!-- <script src="../../plugins/iCheck/icheck.min.js"></script> 
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });-->
</script>
</body>
</html>
