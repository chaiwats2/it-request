<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf8">
<body>

</body>
</html>
<?php
 require 'connect.php';
 $reqid = $_POST['numberrun'];
 $reqowner = $_POST['useradd'];
 $dep = $_POST['selectiondep'];
 $datereq = $_POST['date'];
 $catreq = $_POST['cat'];
 $probdetail = $_POST['message'];
 $status = "wait";
 
  if ($reqid=="") {
   echo "<script type='text/javascript'>alert('คำขอไม่สำเร็จ ! กรุณากดปุ่มเลือกประเภทคำขอก่อน');window.location='addrequest.php'</script>";
  }
  else if($probdetail=="") {
   echo "<script type='text/javascript'>alert('คำขอไม่สำเร็จ ! กรุณาระบุอาการเบื้องต้นก่อน');window.location='addrequest.php'</script>"; 	
  }
  
  else  {
  $query = "INSERT INTO tbrequest (id,username,depart,dtadd,cat,preliminary,status) VALUES ('$reqid','$reqowner','$dep','$datereq','$catreq','$probdetail','$status')"; 
  $result = mysql_query($query,$con);
  header("Location: request.php");
  }
?>