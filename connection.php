<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'u966634246_root', 'Ideal@123', 'u966634246_idealclass');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
?>