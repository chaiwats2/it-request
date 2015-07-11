<?php
session_start();
if (session_destroy()) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>