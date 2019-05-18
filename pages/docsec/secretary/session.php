<?php
include '../../../connection.php';
session_start();
if(!isset($_SESSION['id'])){


	  header("location: user-index.php");
}
?>