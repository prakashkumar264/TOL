<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'treeoflife');
echo"lol";
if (isset($_POST['login_user'])) {
  $AdharNo = mysqli_real_escape_string($db, $_POST['AdharNo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  
  	$query = "SELECT * FROM usermaster WHERE AadharCard = '$AdharNo' and password = '$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  session_start();
	  $_SESSION['userid'] = $AdharNo;
  	  
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
		echo"lol";
  	}
 
}
?>