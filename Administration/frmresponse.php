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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Response Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Chaiwat" >
    <link rel="stylesheet" type="text/css" href="../admin-ui/flaticon.css">
    <link href="../datetimepicking/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> 
    <script src="../js/jquery.js"></script>
    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/form.css" rel="stylesheet">
    <link href="../css/button.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
     <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../icon/favicon.png">
    <link rel="stylesheet" type="text/css" href="../admin-ui/flaticon.css">
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
          <link rel="stylesheet" type="text/css" href="../Administration/menu_files/swimbi.css"/>
            <div id="swimbi"> 
                <ul>
        <li id="lifirst"><a data-icon="&#xF00B;" href="http://">จัดการใบคำขอ</a>
            <ul>
                <li><a data-icon="&#xF0F6;" href="allrequest.php">ใบคำขอทั้งหมด</a></li>
                <li><a data-icon="&#xF017;" href="index.php">ยังไม่ตอบกลับ</a></li>
                <li><a data-icon="&#xF085;" href="#">กำลังดำเนินการ</a></li>
                <li><a data-icon="&#xF046;" href="#">รอการอนุมัติ</a></li>
                <li><a data-icon="&#xF086;" href="#">ปิดงานแล้ว</a></li>
                
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
            </div>

            <p class="navbar-text pull-right">
              Logged in as : <a href="#" class="navbar-link"><font size="2"><?php echo $user_id;?></font></a>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tab-content">
        <form method="POST" class="smart-green2">
            <h1>กรอกรายละเอียดให้คำแนะนำผู้ใช้
              <span style="font-size:14px">สำหรับผู้ดูแลระบบ</span>
            </h1>
          <?php
           $id_pageA=$_REQUEST['idA'];
           $sqlA="select * from tbrequest where id='$id_pageA'";
           $queryA=mysql_query($sqlA);
           $result = mysql_fetch_array($queryA);
           $reqid=$result["id"];
            $uname=$result["username"];
            $date1=$result["dtadd"];
            $dep=$result["depart"];
            $cat=$result["cat"];
            $prel=$result["preliminary"];
            $stat=$result["status"];
            $amn=$result["adminname"];
            $res=$result["result"];
          ?>
              <center><table width="700px">
                <tr>
                  <td width="110px">เลขที่ใบคำขอ : </td>
                  <td width="500px"><input type="text" name="n_reqid" value="<?php echo $reqid; ?>"></td>
                </tr>
                <tr>  
                  <td>ชื่อผู้ขอ : </td>
                  <td><input type="text" value="<?php echo $uname; ?>"></td>
                </tr>
                <tr>
                  <td>แผนก : </td>
                  <td><input type="text" value="<?php
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
              
      ?>"></td>
                </tr>
                <tr>
                <td>วันที่แจ้ง : </td>
                <td><input type="text" value="<?php echo $date1; ?>"></td>
                </tr>
                <tr>
                  <td>ประเภท : </td>
                  <td><input type="text" value="<?php
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
          ?>"></td>
                </tr>
                <tr>
                  <td>อาการเบื้องต้น : </td>
                  <td><textarea type="text"><?php echo $prel; ?></textarea></td>
                </tr>
                <tr>
                  <td>ผู้รับงาน : </td>
                  <td><input name="n_resname" type="text" value="<?php echo $user_id;?>"></td>
                </tr>
                <tr>
                  <td>วันที่รับงาน : </td>
                  <td><input type="text" name="n_resdate" value="<?php ini_set('date.timezone', 'Asia/Bangkok');
                  echo date('d M Y - H:i P'); ?>"></td>
                </tr>
                <tr>
                  <td>สถานะของงาน : </td>
                  <td>
                    <select name="n_stat">
                    <option value="wait">รอรับงาน</option>
                    <option value="process">กำลังเดำนินการ</option>
                    <option value="wait_approve">รอการอนุมัติ</option>
                    <option value="completed">เสร็จเรียบร้อย</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>สรุปผล/คำแนะนำ</td>
                  <td><textarea type="text" name="n_result"></textarea></td>
                </tr>
               </tr>
              </table><br>
              <input type="submit" name="Addbtn" class="btn btn-info" value=" บันทึก ">
              <?php
                if($_REQUEST["Addbtn"]!=''){
                $id = $_REQUEST["n_reqid"];
                $status = $_REQUEST["n_stat"];
                $resname = $_REQUEST["n_resname"];
                $resdate = $_REQUEST["n_resdate"];
                $reslt = $_REQUEST["n_result"];
                include("connectres.php");
                $sqlup="UPDATE tbrequest SET status='$status',adminname='$resname',dtcom='$resdate',result='$reslt' WHERE id='$id'";
                $queryup = mysql_query($sqlup);
                header("Location: responsed.php");
              }
              ?>
              </center>
            </form>
        </div>
        </div>
            <hr>
              <footer>
                <p>&copy; 412 Academy</p>
              </footer>
            </div>
           </body>
        </html>