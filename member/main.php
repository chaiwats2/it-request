<?php
session_start();
if (!isset($_SESSION['login_id'])) {
}
include("connectdb.php");
$session_login_id = $_SESSION['login_id'];

$qry_user = "SELECT * FROM users WHERE id='$session_login_id'";
$query_user = mysqli_query($dbcon,$qry_user);
if ($query_user) {
	$result_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
	echo $s_login_username = $row_user['username'];
	echo $s_login = $row_user['extension'];
	echo $s_login_department = $row_user['department'];
	mysqli_free_result($result_user);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<center>
	<?php
	$extension = $_SESSION['login_id'];
	echo "ยินดรต้อนรับคุณ".$extension;
	//echo $s_login_username;
	?><br>
	<?php
	
	?><br>
	<a href="logout.php">ออกจากระบบ</a>	

</center>
</body>
</html>