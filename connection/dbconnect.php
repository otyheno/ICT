<?php
	
	//$connection= new mysqli('localhost','root','','contactinfo') or die ('echo error')

$connection = mysqli_connect('localhost', 'root', ''); //connecting to the mysql database

if (!$connection)

	{
    	die("Database Connection Failed" . mysqli_error($connection)); //display an error message if the connection fails.
	}

$select_db = mysqli_select_db($connection, 'ICT'); //select the msql database.

if (!$select_db)
	
	{
    	die("Database Selection Failed : " . mysqli_error($connection)); //if database connection fails, display an error.
	}

	
?>