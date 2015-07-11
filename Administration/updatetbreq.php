<?php
	include("connecres.php");
	$sql="UPDATE tbrequest SET adminname='test' WHERE id='PH0001'";
	$query = mysql_query($sql);
?>