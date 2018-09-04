<!-- Para makaconnect sa server -->
<?php 
	$server = "localhost";
	$username = "root";
	$password = "";

	// Create Connection to Server
	$conn = mysqli_connect($server, $username, $password);
	// Check Connection to Server
	if (!$conn) {
		die("Connection to Server Error: " . mysqli_connect_error($conn));
	}
 ?>