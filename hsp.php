<?php

$db = mysqli_connect('localhost', 'root', '', 'treeoflife');

if (isset($_POST['submit'])) {
  $rgsno = mysqli_real_escape_string($db, $_POST['registerationnumber']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  
  
  	$query = "SELECT * FROM hospitalmaster WHERE RegistrationNumber = '$rgsno'";

  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  session_start();
	  	$results = mysqli_query($db, "SELECT * FROM hospitalmaster WHERE RegistrationNumber = '$rgsno'");
		while($row = mysqli_fetch_array($results)){
			$_SESSION['hspid'] = $row["id"];
			$_SESSION['name'] = $row["Name"];
		}
		
		

		header('location: hspindex.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
		echo"lol";
  	}
 
  	
}

?>
