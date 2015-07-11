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
?>