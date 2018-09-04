<?php 
	include("connection/conn_server.php");

	$sql = "CREATE DATABASE IF NOT EXISTS ama_scheduler;";

	if (!mysqli_query($conn, $sql)) {
		die("Error Creating Database: " . mysqli_error($conn));
	}
 ?>