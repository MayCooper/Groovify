<?php
	ob_start();

	session_start();
	
//store time in database
	$timezone = date_default_timezone_set("Canada/Eastern");

//connect with server name, username, password, and db name 
	$con = mysqli_connect("localhost", "root", "", "groovify");
	
	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();

	}

?>