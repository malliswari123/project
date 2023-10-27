<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="medco_cosultancy";
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(!$con)
	{
		die("falied to connect!");
	}
?>

