<<?php 

if(isset($_POST['Submit'])){


require('dbconnect.php');

// Assigning POST values to variables
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Message=$_POST['message'];

	// INSERT DATA INTO  TABLE CONTACT.

	$query="INSERT INTO `Feedback`(`Name`, `Email`, `Message`) VALUES ('$Name','$Email','$Message')";


	if(!mysqli_query($connection, $query))

{
	echo("The Message has been sent successfully");
}

else

{
	echo ("please try again");
}

header("Location:\ICT\index.html");


}


 ?>