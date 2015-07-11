<?php
include('connect.php');
include('addreqph.php');
// $nameloged = username();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>
	</title>
</head>
<body><center>
	สวัสดีคุณ :  
	<br><br>
	<label>ชื่อผู้ใช้ : </label>
	<input type="text" value=" <?php username() ?>"><br><br>
	<br><br>
	<label>แผนก : </label>
	<?php 
	$dep = depart();
	?>
	</center>
</body>
</html>