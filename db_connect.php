<?php
	//make connection with database
	$link = mysqli_connect("localhost","root","","dbname");
	// Check connection
	if($link === false) {
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>