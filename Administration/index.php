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
<title>Request Management</title>
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
<link rel="stylesheet" type="text/css" href="Administration/menu_files/swimbi.css"/>
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
          </ul>
</div><!--/.nav-collapse -->
<br><br><br>
      <table width="1000px" align="center" border="0"> 
            <tr align="right">        
         <td>ระบุรหัสใบคำขอ : <input><button class="btn-warning">ค้นหา</button></td>
        </tr>        
        </table><br><br>
      <table width="1200px" align="center" border="0">      
      <tr>
      <?php
        $icowait = "<img src = '../iconstat/wait.png'width=25px>";
        $icoprocess = "<img src = '../iconstat/processing.png'width=30px>";
        $icocheck = "<img src = '../iconstat/checking.png'width=24px>";
        $icocomplete = "<img src = '../iconstat/complete.png'width=25px>";
      ?>
      <td style="font-size:20px"><strong>ตารางคำขอที่ยังไม่ได้ตอบกลับ</strong></td>
      <td align="right"><?php echo $icowait; ?> รอการตอบรับ |</td>
      <td align="right"><?php echo $icoprocess; ?> กำลังดำเนินการ |</td>
      <td align="right"><?php echo $icocheck; ?> รออนุมัติ |</td>
      <td align="right"><?php echo $icocomplete; ?> เสร็จเรียบร้อย</td>     
        </tr>      
      </table>
      <table width="1200px" class="imagetable" align="center" border="1px">
          <tr>
          <th>ลำดับ</th>
          <th>รหัสใบคำขอ</th>
          <th>ชื่อผู้ใช้</th>
          <th>วันที่</th>
          <th>แผนก</th>
          <th>ประเภทคำขอ</th>
          <th>อาการเบื้องต้น</th>
          <th>สถานะ</th>
          <th>จัดการ</th>
        </tr>
        <?php
        $sql="select*from tbrequest where status='wait'";
          $query = mysql_query($sql);
          $i=0;
          $n=1;
        while($result = mysql_fetch_array($query)){
          $reqid=$result["id"];
          $uname=$result["username"];
          $date=$result["dtadd"];
          $dep=$result["depart"];
          $cat=$result["cat"];
          $prel=$result["preliminary"];
          $stat=$result["status"];
          $amn=$result["adminname"];
          $res=$result["result"];
          $i++;
        ?>    
        <td><?php echo $n++; ?> </td>
        <td><?php echo $reqid ?></td>
        <td><?php echo $uname ?></td>
        <td><?php echo $date ?></td>
        <td>
            <?php
                if($dep=="01") {
                    echo "IT";          
                }
                else if($dep=="02") {
                    echo "Telesales";               
                }
                else if($dep=="03") {
                    echo "Broker";              
                }
                else if($dep=="04") {
                    echo "Admin";               
                }
                else if($dep=="05") {
                    echo "Human Research";              
                }
                else if($dep=="06"){
                    echo "Research";                
                }
                else if($dep=="07") {
                    echo "QC";              
                }
                else if($dep=="08") {
                    echo "Domino";              
                }
                else if($dep=="09") {
                    echo "CSI";             
                }
                else if($dep=="10") {
                    echo "Health";              
                }
                else if($dep=="11") {
                    echo "Chev Campaign";               
                }
                else if($dep=="12") {
                    echo "CAC";             
                }
                else if($dep=="13") {
                    echo "Chevy Plus";              
                }
                else if($dep=="14") {
                    echo "Back Office";             
                }
                else if($dep=="15") {
                    echo "Account";             
                }
                            
            ?>        
        </td>
        <td>
          <?php
            if ($cat=="01") {
              echo "ระบบโทรศัพท์";
            }
            else if ($cat=="02") {
              echo "ฮาร์ดแวร์";
            }
            else if ($cat=="03") {
              echo "ซอร์ฟแวร์";
            }
            else if ($cat=="04") {
              echo "เน็ตเวิร์ค";
            }
            else if ($cat=="05") {
              echo "อื่น ๆ";
            }
          ?>
        </td>
        <td><?php echo $prel; ?></td>
        <td align="center">
        <?php
          if ($stat=="wait") {
            echo $icowait;
          }
          else if ($stat=="process") {
            echo $icoprocess;
          }
          else if ($stat=="wait_approve") {
            echo $icocheck;
          }
          else if ($stat=="completed") {
            echo $icocomplete;
          }
        ?>
        </td>
        <td>
            <a href="frmresponse.php?idA=<?php echo $reqid; ?>"><button><i class="flaticon-chat67"></i>ตอบกลับ</button></a>
            <button><i class="flaticon-new96"></i> ส่งเมลขออนุมัติ</button>
        </td>
        </tr>
         <?php } ?>
     </table>
    <table class="imagetable" width="1200" align="center">
    <th align="left">คุณมี <?php echo $i; ?> รายการที่ยังไม่ได้ตอบกลับ</th>
    <th align="right">
      <button>ถัดไป</button></td>
      <button>ย้อนกลับ</button></td>
    </th>
    </table>
</body>
</html>
