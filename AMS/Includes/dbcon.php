<?php
	$host = "localhost";
	$user = "root";
	$pass = "";

	$db = "attendancemsystem";
	$port = 3308;
	
	$conn = new mysqli($host, $user, $pass, $db, port: $port);
	if($conn->connect_error){
		echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
	}
?>