<?php
session_start(); //starting session
$error =""; //variable to store error message


if (isset($_POST['login'])) {

require('dbconnect.php');

	$Email = $_POST['Email'];
	$Password = md5($_POST['Password']);

// CHECK FOR THE RECORD FROM TABLE

$query = "SELECT * FROM `Users` WHERE Email='$Email' and Password='$Password'";



$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

  $count = mysqli_num_rows($result);

if ($count == 1) {
$_SESSION['login_user']=$Email; // Initializing Session
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header("location: \ICT\index2.php"); // Redirecting To home Page
} else {
$error = "Username or Password is invalid";
}


 /* 

if ($count == 1){

	echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

	header("Location:\ICT\index2.php");

}

else {

	echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
	exit();

}
*/
}


?>
