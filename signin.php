<?php
session_start();
include("config/connection/conn_db.php");
$professor_id=$_POST['professor_id']; // Fetching Values from URL.
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
$sql = "SELECT * FROM tbl_users WHERE professor_id='$professor_id' AND password='$password';";
$result = mysqli_query($conn, $sql);
$data = mysqli_num_rows($result);
if(($data)==1) {
		echo "Welcome!";
		$_SESSION['professor_id'] = $_POST['professor_id']; 
}
else {
echo "Invalid username or password";
}
mysqli_close ($conn);
?>