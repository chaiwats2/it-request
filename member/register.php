<!-- this page is code for insert new user to database -->
<?php
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$extension = $_POST['extension'];
	$department = $_POST['department'];
	
	$query = "INSERT INTO users (username,password,extension,department) VALUES ('$username','$password','$extension','$department')";
	$result = mysqli_query($con,$query);''
	}
?>