<?php

//database connection datas
	$servername = "localhost";
	$db_username = "root";
	$db_password = "";
	$database_name ="gym-managment-system";

	$conn = mysqli_connect($servername, $db_username, $db_password, $database_name);

	if(!$conn) {
		die ("Database connection error");
	}

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT admin_id, password FROM admins WHERE username = 'admin'";

	} else {
		echo "Nisu poslati podaci";
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
</head>
<body>
	<form action="" method="post">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
	
</body>
</html>