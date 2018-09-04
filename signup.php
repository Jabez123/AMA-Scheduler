<?php
include("config/connection/conn_db.php");
$professor_id=$_POST['professor_id']; // Fetching Values from URL.
$password= sha1($_POST['password']); // Password Encryption, If you like you can also leave sha1.
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$sql = "SELECT * FROM tbl_users WHERE professor_id='$professor_id';";
$result = mysqli_query($conn, $sql);
$data = mysqli_num_rows($result);
if(($data)==0){
	$sql = "INSERT INTO tbl_professor(professor_id, first_name, last_name) VALUES 
	('$professor_id', '$first_name', '$last_name');";
	$sql .= "INSERT INTO tbl_users(professor_id, password) VALUES ('$professor_id', '$password');"; 	
	$query = mysqli_multi_query($conn, $sql); // Insert query
	if($query){
		echo "You have Successfully Signed Up.";
	}
	else {
		echo "Ooopss Something is wrong!!";
	}
}
else {
echo "This professor_id is already registered, Please try another professor_id...";
}
mysqli_close ($conn);
?>