
<?php 
  session_start(); 

  if (!isset($_SESSION['xyz'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: sign-in.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['xyz']);
  	header("location: sign-in.php");
  }
?>
<?php

// initializing variables

$errors = array(); 

// connect to the database

?>
