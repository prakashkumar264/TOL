
 

<?php


// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'treeoflife');

// REGISTER USER
if (isset($_POST['reg_user'])) {
 $Fname = $_POST['FirstName'];
echo"bye";
$Lname = $_POST['LastName'];
$adharno = $_POST['AdharNo'];
$email = $_POST['email'];
$mob = $_POST['Phone'];
$password = $_POST['password'];
$pincode = $_POST['pincode'];



  	$query = "INSERT INTO usermaster(Fname, Lname, AadharCard, Email, Phone, password, pincode) VALUES  ('$Fname' , '$Lname' , '$adharno','$email' ,'$mob', '$password','$pincode')";
  	mysqli_query($db, $query);
	$query2 = "SELECT * FROM usermaster WHERE AadharCard = '$adharno'";

  	$results = mysqli_query($db, $query2);
  	if (mysqli_num_rows($results) == 1) {
  	  session_start();
	  
		while($row = mysqli_fetch_array($results)){
			$_SESSION['xyz'] = $row["id"];
			
		}
	}
	$usssrid = $_SESSION['xyz'] ;
	$query3 = "INSERT INTO userdetail(Userid) VALUES('$usssrid')";
	mysqli_query($db, $query3);
	$query4 = "INSERT into medicalconditionmaster(Userid) VALUES('$usssrid')";
	mysqli_query($db, $query4);
  	header('location: sign-in.php');
  }
  
  
if (isset($_POST['login_user'])) {
  $AdharNo = mysqli_real_escape_string($db, $_POST['AdharNo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  	$query = "SELECT * FROM usermaster WHERE AadharCard = '$AdharNo' and password = '$password'";

  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  session_start();
	  	$results = mysqli_query($db, "SELECT * FROM usermaster WHERE AadharCard = '$AdharNo' and password = '$password'");
		while($row = mysqli_fetch_array($results)){
			$_SESSION['xyz'] = $row["id"];
			$_SESSION['pincode'] = $row["pincode"];
		}
		
		

		header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
		echo"lol";
  	}
 
}
?>
