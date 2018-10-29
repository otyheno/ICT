<?php

if (isset($_POST['login'])) {

require('dbconnect.php');

	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

// CHECK FOR THE RECORD FROM TABLE

$query = "SELECT * FROM `Users` WHERE Email='$Email' and Password='$Password'";



$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

  $count = mysqli_num_rows($result);

if ($count == 1){

	echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

	header("Location:\ICT\index2.php");

}

else {

	echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
	exit();

}
}

?>
