<?php


//when submit button is clicked
	if(isset($_POST['signup'])){  


require('dbconnect.php');

	//assigning post values to variables

		$FirstName = $_POST['f_name'];
		$LastName = $_POST['l_name'];
		$Email = $_POST['Email'];
		$Password = md5($_POST['Password']);


$sql = "INSERT INTO `Users`(`FirstName`, `LastName`, `Email`, `Password`) VALUES ('$FirstName', '$LastName', '$Email', '$Password')";

	if(mysqli_query($connection, $sql))

		{
			echo("Success");
		}

		else

			{
				echo ("please try again");
			}

header("Location:\ICT\login.php");


	}

?>