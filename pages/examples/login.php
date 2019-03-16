<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'treeoflife');
echo"lol";
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['AdharNo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	;
  	$query = "SELECT Fname FROM usermaster WHERE AdharCard = '$username' and password = '$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../../pages/tables/normal-tables.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
		echo"lol";
  	}
  }
}
?>