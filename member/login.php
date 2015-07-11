<?php
$host='localhost'; 
$user='root'; 
$pass=''; 
$database='reqdb'; 
$con=mysql_connect("$host","$user","$pass"); 
if(!$con) { echo "Database connection is not."; }

mysql_select_db("$database"); 
mysql_query("SET character_set_results=UTF8"); 
mysql_query("SET character_set_client=UTF8"); 
mysql_query("SET character_set_connection=UTF8");














/*require 'connectdb.php';
$login_username = mysqli_real_escape_string($dbcon,$_POST['username']);
$login_password = mysqli_real_escape_string($dbcon,$_POST['password']);

$sql = "SELECT * FROM users WHERE username=? AND password=?";
$stmt = mysqli_prepare($dbcon,$sql);
mysqli_stmt_bind_param($stmt,"ss",$login_username,$login_password);
mysqli_execute($stmt);
$result_user = mysqli_stmt_get_result($stmt);
if ($result_user->num_rows == 1) {
	session_start();
	$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
	$_SESSION['login_id'] = $row_user['username'];
	$_SESSION['extension'] = $row_user['extension'];
	header("Location: main.php");
	}
	else{
	  echo "Wrong Username or Password";
	}*/
?>