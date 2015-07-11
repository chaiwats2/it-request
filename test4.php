<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="request/admin-ui/flaticon.css">
    <link href="datetimepicking/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> 
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body><center>
<h1>ลงทะเบียน</h1>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
			<form action="register.php" class="smart-green" method="POST">
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
  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <script type="text/javascript">
</body>
</html>