<?php
	require '../connect.php';
	$username = $_POST['user_name'];
	$password = $_POST['user_password'];
	$extension = $_POST['user_extension'];
	$email = $_POST["user_email"];
	$department = $_POST['user_department'];
	
	$query = "INSERT INTO users (username,password,extension,email,department) VALUES ('$username','$password','$extension','$email','$department')";
	$result = mysql_query($query);
	header("Location: users.php");
?>