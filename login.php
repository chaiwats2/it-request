<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
$host='localhost'; 
$user='root'; 
$pass='Area_73reg'; 
$database='reqdb'; 
$con=mysql_connect("$host","$user","$pass"); 
if(!$con) { echo "Database connection is not."; }

mysql_select_db("$database"); 
mysql_query("SET character_set_results=UTF8"); 
mysql_query("SET character_set_client=UTF8"); 
mysql_query("SET character_set_connection=UTF8");

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
// $depart = $_REQUEST['department'];
if($user==''){
	echo "<script type='text/javascript'>alert('กรุณากรอกชื่อผู้ใช้!');window.location='index.php'</script>";
	exit();
}

if($pass==''){
	echo "<script type='text/javascript'>alert('กรุณากรอกรหัสผ่าน!');window.location='index.php'</script>";
	exit();
}
$sqlLogin="select * from users where username='$user' and password='$pass'";
$queryLogin=mysql_query($sqlLogin);
$rw=mysql_fetch_array($queryLogin);
$depart = $rw['department'];
$num=mysql_num_rows($queryLogin);
if($num == 0){
	echo "<script type='text/javascript'>alert('ชื่อผู้ใช้หรือ รหัสผ่าน ไม่ถูกต้อง!');window.location='index.php'</script>";
	exit();
}
// var_dump(mysql_result($queryLogin,0,"department"));
// exit();
//var_dump(session_id()); exit();
if($depart == '01'){
	$_SESSION['user_id_login'] = mysql_result($queryLogin,0,"username");
	$_SESSION['user_department_login'] = mysql_result($queryLogin,0,"department");
?>
	<script type="text/javascript">;window.location="Administration/index.php"</script>
<?php
}else{
	$_SESSION['user_id_login'] = mysql_result($queryLogin,0,"username");
	$_SESSION['user_department_login'] = mysql_result($queryLogin,0,"department");
	// $_SESSION['user_department_id'] = mysql_result($queryLogin,0,"username");
//echo "Hello : ".$rw["username"];
?>
	<script type="text/javascript">;window.location="request.php"</script>

<?php
	
}

?>
