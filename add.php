<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$name = $_POST['vName'];
		$contact = $_POST['vContact'];
		$email = $_POST['vEmail'];
		$message = $_POST['vMessage'];
		$sql = "INSERT INTO `visiter` (`name`, `contact`, `email`, `message`) VALUES ('$name', '$contact', '$email', '$message');";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}

		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php#contact_section');
?>