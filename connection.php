<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_lumed";

$conn = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

$pdo = new PDO('mysql:host=localhost;dbname=db_lumed;charset=utf8','root','');

if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
}

date_default_timezone_set('Asia/Manila');

?>