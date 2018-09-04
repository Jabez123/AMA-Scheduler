 <?php  
 	include("connection/conn_db.php");

 	$sql = "CREATE TABLE IF NOT EXISTS tbl_professor
	(professor_id VARCHAR(500) PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL);";

	if (!mysqli_query($conn, $sql)) {
		die("Error Creating Table tbl_users: " . mysqli_error($conn));
	}

	mysqli_close($conn);
 ?>
<!---------------------------------------------------------------------------------------------->
<?php 
	include("connection/conn_db.php");

	$sql = "CREATE TABLE IF NOT EXISTS tbl_users
	(user_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	professor_id VARCHAR(500) NOT NULL,
	password VARCHAR(50) NOT NULL,
	CONSTRAINT FK_professor_id FOREIGN KEY (professor_id)
    REFERENCES tbl_professor(professor_id));";

	if (!mysqli_query($conn, $sql)) {
		die("Error Creating Table tbl_users: " . mysqli_error($conn));
	}

	mysqli_close($conn);
 ?>

<!---------------------------------------------------------------------------------------------->
 <?php  
 	include("connection/conn_db.php");

 	$sql = "CREATE TABLE IF NOT EXISTS tbl_class
	(class_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	subject VARCHAR(50) NOT NULL,
	section VARCHAR(50) NOT NULL,
	day VARCHAR(50) NOT NULL,
	start TIME,
	end TIME,
	room VARCHAR(50) NOT NULL,
	professor VARCHAR(50) NOT NULL);";

	if (!mysqli_query($conn, $sql)) {
		die("Error Creating Table tbl_users: " . mysqli_error($conn));
	}

	mysqli_close($conn);
 ?>