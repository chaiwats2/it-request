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
        <p class="navbar-text pull-right">
              Logged in as : <a href="#" class="navbar-link"><font size="2"><?php echo $user_id;?></font></a>
            </p>
    </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tab-content">
        <form action="create_user.php" method="POST" class="smart-green2">
            <h1>เพิ่มผู้ใช้ไหม่
            </h1>
              <center><table width="700px">
                <tr>
                  <td width="110px">ชื่อผู้ใช้ : </td>
                  <td width="500px"><input type="text" name="user_name" value=""></td>
                </tr>
                <tr>  
                  <td>รหัสผ่าน : </td>
                  <td><input type="text" name="user_password" value=""></td>
                </tr>
                <tr>
                  <td>แผนก : </td>
                  <td>
                    <select id="selectiondep" name="selectiondep" style="width:300px">
                    <option value=""></option>
                    <option value="01" >IT</option>
                    <option value="02">telesale</option>
                    <option value="03">broker</option>
                    <option value="04">admin</option>
                    <option value="05">hr</option>
                    <option value="06">research</option>
                    <option value="07">qc</option>
                    <option value="08">domino</option>
                    <option value="09">csi</option>
                    <option value="10">health</option>
                    <option value="11">chev campaign</option>
                    <option value="12">chev cac</option>
                    <option value="13">chevyplus</option>
                    <option value="14">back office</option>
                    <option value="15">account</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>เบอติดต่อภายใน : </td>
                  <td><input type="text" value="" name="user_extension"></td>
                </tr>
                <tr>
                  <td>อีเมล์ : </td>
                  <td><input type="text" value="" name="user_email"></td>
                </tr>
               </tr>
              </table><br>
              <input type="submit" name="" class="btn btn-info" value=" บันทึก ">
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