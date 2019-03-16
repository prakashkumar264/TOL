
 

<?php
session_start();

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
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../../pages/tables/normal-tables.html');
  }
?>
