<?php
session_start();
 include("../connect.php");
$user_id=$_SESSION['user_id_login'];
$sqlLogin="select * from users where id='$user_id'";
$queryLogin=mysql_query($sqlLogin);
$rw=mysql_fetch_array($queryLogin);
$username = $rw['username'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Chaiwat" >
    <script src="../js/jquery.js"></script>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icon/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <link rel="stylesheet" type="text/css" href="../admin-ui/flaticon.css">
</head>
<body>
<!-- swimbi code start -->
<link rel="stylesheet" type="text/css" href="menu_files/swimbi.css"/>
<!-- <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
          </a>
 -->          <link rel="stylesheet" type="text/css" href="Administration/menu_files/swimbi.css"/>
<div id="swimbi">
    <ul>
        <li id="lifirst"><a data-icon="&#xF00B;" href="http://">จัดการใบคำขอ</a>
            <ul>
                <li><a data-icon="&#xF0F6;" href="allrequest.php">ใบคำขอทั้งหมด</a></li>
                <li><a data-icon="&#xF017;" href="index.php">ยังไม่ตอบกลับ</a></li>
                <li><a data-icon="&#xF085;" href="responsed.php">กำลังดำเนินการ</a></li>
                <li><a data-icon="&#xF046;" href="wait_approve.php">รอการอนุมัติ</a></li>
                <li><a data-icon="&#xF086;" href="complete.php">ปิดงานแล้ว</a></li>
            </ul>
        </li>
        <li><a data-icon="&#xF0C0;" href="#">จัดการสมาชิก</a>
            <ul>
                <li><a data-icon="&#xF03C;" href="#">แผนก</a>
                    <ul>
                        <li><a data-icon="&#xF00B;" href="#">โปรเจ็คทั้งหมด</a></li>
                        <li><a data-icon="&#xF067;" href="#">เพิ่มโปรเจ็ค</a></li>
                    </ul>
                </li>
                <li><a data-icon="&#xF007;" href="#">ผู้ใช้</a>
                    <ul>
                        <li><a data-icon="&#xF0C0;" href="users.php">ผู้ใช้ทั้งหมด</a></li>
                        <li><a data-icon="&#xF234;" href="frm_createuser.php">เพิ่มผู้ใช้</a></li>
                        <li><a data-icon="&#xF044;" href="#">แก้ไข</a></li>
                        <li><a data-icon="&#xF235;" href="#">ลบ</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li id="lilast"><a data-icon="&#xF02D;" href="http://">คู่มือ</a>
            <ul>
                <li><a data-icon="&#xF02D;" href="#">คู่มือทั้งหมด</a></li>
                <li><a data-icon="&#xF055;" href="#">เพิ่ม</a></li>
                <li><a data-icon="&#xF056;" href="#">ลบ</a></li>
                <li><a data-icon="&#xF044;" href="#">แก้ไข</a></li>
            </ul>
        </li>
    </ul>
</div><!--/.nav-collapse -->
<p class="navbar-text pull-right">
              Logged in as : <a href="#" class="navbar-link"><font size="2"><?php echo $user_id;?></font></a>
            </p>
        </div>
      </div>
    </div>
<script src="menu_files/swimbi.js"></script>
<!-- swimbi code end -->


<br><br><br>
      <table width="1000px" align="center" border="0"> 
            <tr align="right">        
        </tr>        
        </table>
      <table width="900px" align="center" border="0">      
      <tr>
      <td style="font-size:20px"><strong>รายละเอียดผู้ใช้</strong></td>
      </tr>      
      </table>
      <table width="900px" class="imagetable" align="center" border="1px">
          <tr>
          <th>ลำดับ</th>
          <th>ชื่อพนักงาน</th>
          <th>แผนก</th>
          <th>รายละเอียดเครื่อง</th>
          <th>อีเมลย์</th>
          <th>เบอร์โทรศัพท์ภายใน</th>
          <th>จัดการผู้ใช้</th>
        </tr>
        <?php
        $sql="select*from users";
          $query = mysql_query($sql);
          $i=0;
          $n=1;
        while($result = mysql_fetch_array($query)){
          $user_name=$result["username"];
          $user_extension=$result["extension"];
          $user_department=$result["department"];
          $user_email=$result["email"];
          $i++;
        ?>    
        <td><?php echo $n++; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php
        if($user_department=="01") {
          echo "IT";      
        }
        else if($user_department=="02") {
          echo "Telesales";       
        }
        else if($user_department=="03") {
          echo "Broker";        
        }
        else if($user_department=="04") {
          echo "Admin";       
        }
        else if($user_department=="05") {
          echo "Human Research";        
        }
        else if($user_department=="06"){
          echo "Research";        
        }
        else if($user_department=="07") {
          echo "QC";        
        }
        else if($user_department=="08") {
          echo "Domino";        
        }
        else if($user_department=="09") {
          echo "CSI";       
        }
        else if($user_department=="10") {
          echo "Health";        
        }
        else if($user_department=="11") {
          echo "Chev Campaign";       
        }
        else if($user_department=="12") {
          echo "CAC";       
        }
        else if($user_department=="13") {
          echo "Chevy Plus";        
        }
        else if($user_department=="14") {
          echo "Back Office";       
        }
        else if($user_department=="15") {
          echo "Account";       
        }
      ?>
      </td>
      <td>

      </td>
      <td><?php echo $user_email; ?></td>
      <td><?php echo $user_extension; ?></td>
      <td align="center">
            <a href=""><button><i class="flaticon-write19"></i></button></a>
            <a href=""><button><i class="flaticon-recycle69 "></i></button></a>
        </td>
        </tr>
         <?php } ?>
     </table>
    <table class="imagetable" width="900" align="center">
    <th align="left">มีพนักงานทั้งหมด <?php echo $i; ?> คน</th>
    <th align="right">
      <button>ถัดไป</button></td>
      <button>ย้อนกลับ</button></td>
    </th>
    </table>
</body>
</html>
