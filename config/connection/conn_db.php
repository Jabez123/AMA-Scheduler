<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "ama_scheduler";

	$conn = mysqli_connect($server, $username, $password, $database);

	if (!$conn) {
		die("Connection to Database Error: " . mysqli_connect_error($conn));
	}
 ?>