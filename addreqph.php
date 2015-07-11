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

function phonesystem()
{
	$sql="select*from tbrequest where id LIKE 'PH%' ORDER BY id DESC ";
	$query=mysql_query($sql);
	$Num_Rows = mysql_num_rows($query); 
	$result = mysql_fetch_array($query);
	list($a,$b)=explode("H",$result["id"]);
	$a=$a."H";
	$c=strlen($b);
	$b=$b+1;
	$c=$c-strlen($b);
	if($c==3){$b="000".$b;}
	else if($c==2){$b="00".$b;}
	else if($c==1){$b="0".$b;}
	else if($c==0){$b=$b;}
	$sum=$a.$b;
	return $sum;
}


function hardware()
{
	$sql="select*from tbrequest where id LIKE 'HW%' ORDER BY id DESC ";
	$query=mysql_query($sql);
	$Num_Rows = mysql_num_rows($query); 
	$result = mysql_fetch_array($query);
	list($a,$b)=explode("W",$result["id"]);
	$a=$a."W";
	$c=strlen($b);
	$b=$b+1;
	$c=$c-strlen($b);
	if($c==3){$b="000".$b;}
	else if($c==2){$b="00".$b;}
	else if($c==1){$b="0".$b;}
	else if($c==0){$b=$b;}
	$sum=$a.$b;
	return $sum;
	echo $sum;
}
	function software()
{
	$sql="select*from tbrequest where id LIKE 'SW%' ORDER BY id DESC ";
	$query=mysql_query($sql);
	$Num_Rows = mysql_num_rows($query); 
	$result = mysql_fetch_array($query);
	list($a,$b)=explode("W",$result["id"]);
	$a=$a."W";
	$c=strlen($b);
	$b=$b+1;
	$c=$c-strlen($b);
	if($c==3){$b="000".$b;}
	else if($c==2){$b="00".$b;}
	else if($c==1){$b="0".$b;}
	else if($c==0){$b=$b;}
	$sum=$a.$b;
	return $sum;
	echo $sum;
}
	function network()
{
	$sql="select*from tbrequest where id LIKE 'NW%' ORDER BY id DESC ";
	$query=mysql_query($sql);
	$Num_Rows = mysql_num_rows($query); 
	$result = mysql_fetch_array($query);
	list($a,$b)=explode("W",$result["id"]);
	$a=$a."W";
	$c=strlen($b);
	$b=$b+1;
	$c=$c-strlen($b);
	if($c==3){$b="000".$b;}
	else if($c==2){$b="00".$b;}
	else if($c==1){$b="0".$b;}
	else if($c==0){$b=$b;}
	$sum=$a.$b;
	return $sum;
	echo $sum;
}
	function other()
{
	$sql="select*from tbrequest where id LIKE 'OT%' ORDER BY id DESC ";
	$query=mysql_query($sql);
	$Num_Rows = mysql_num_rows($query); 
	$result = mysql_fetch_array($query);
	list($a,$b)=explode("T",$result["id"]);
	$a=$a."T";
	$c=strlen($b);
	$b=$b+1;
	$c=$c-strlen($b);
	if($c==3){$b="000".$b;}
	else if($c==2){$b="00".$b;}
	else if($c==1){$b="0".$b;}
	else if($c==0){$b=$b;}
	$sum=$a.$b;
	return $sum;
	echo $sum;
}
function depart()
{
$sql = "SELECT department FROM users";
$result = mysql_query($sql);

echo "<select name='PcID'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['department'] . "'>" . $row['department'] . "</option>";
}
echo "</select>";
}
function username()
{
	$sql = "SELECT username FROM users";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
	echo $row['username'];
	return $row;
	}
}
?>

