<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body><center>
<h1>ลงทะเบียน</h1>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
			<form action="register.php" method="POST">
			<label for="username"> User Name : </label>
			<input type="text" name="username" required autofocus><br><br>
			<label for="password"> Password : </label>	
			<input type="password" name="password" required autofocus><br><br>
			<label for="extension"> Extension No. : </label>
			<input type="text" name="extension" required autofocus><br><br>
			<label for="department"> Department : </label>
			<input type="text" name="department" required autofocus><br><br>
			<input type="submit" value="ลงทะเบียน"><br><br>
			<a href="index.php">กลับหน้าหลัก</a>
			</form>
		</div>
	</div>
</div>
</center>
</body>
</html>