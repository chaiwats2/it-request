<?php
$link = mysql_connect("localhost","root","");
if ($link) {
	echo "Connection_complete";
}
else{
	echo "Connection_Fail";
}
?>
