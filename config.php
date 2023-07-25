<?php

//database connection
	$servername = "localhost";
	$db_username = "root";
	$db_password = "";
	$database_name ="gym-managment-system";

	$conn = mysqli_connect($servername, $db_username, $db_password, $database_name);

	if(!$conn) {
		die ("Database connection error");
	}