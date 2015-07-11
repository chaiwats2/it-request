<!-- Using this for connect Data Base -->
<?php
$dbcon = mysqli_connect('localhost','root','','reqdb');

if (mysqli_connect_errno()) {
	echo "Fail to connect database". mysqli_connect_error();
	exit;
}
mysqli_set_charset($dbcon,'utf8');
?>