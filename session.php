
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");

// Selecting Database
$database = mysqli_select_db($connection, "ICT");
session_start();// Starting Session

// Storing Session
$user=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$sql="SELECT Email FROM Users WHERE Email='$user'";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

$login_session =$row['Email'];

if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('location: \ICT\index.html'); // Redirecting To Home Page
}
?>