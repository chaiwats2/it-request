<?php
session_start();
  include("connect.php");
  include('addreqph.php');
  $idreqph = phonesystem();
  $idreqhw = hardware();
  $idreqsw = software();
  $idreqnw = network();
  $idreqot = other();


$user_id = $_SESSION['user_id_login'];
$user_department = $_SESSION['user_department_login'];
// var_dump($_SESSION);
// exit();
$sqlLogin="select * from users where id='$user_id'";
$queryLogin=mysql_query($sqlLogin);
$rw=mysql_fetch_array($queryLogin);
$username = $rw['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Chaiwat" >
    <link rel="stylesheet" type="text/css" href="request/admin-ui/flaticon.css">
    <link href="datetimepicking/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> 
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="js/jquery.js"></script>
    <script>
  $(document).ready(function(){
    $('#insert').click(function(){
      
      var val = $('#hide').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
      $('#numberrun').attr('value', val);
      $('.selected').empty();
      $('.selected').append(
      '<option value="01" selected="selected">ระบบโทรศัพท์</option><option value="foo">Pho</option>');
      return false;
    });
    $('#insert1').click(function(){
      var val = $('#hide1').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
    $('#numberrun').attr('value', val);
      $('.selected').empty();
      $('.selected').append(
      '<option value="02" selected="selected">ฮาร์ดแวร์</option><option value="foo">Pho</option>');
    return false;
    });
    $('#insert2').click(function(){
      var val = $('#hide2').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
      $('#numberrun').attr('value', val);
          $('.selected').empty();
      $('.selected').append(
      '<option value="03" selected="selected">ซอร์ฟแวร์</option><option value="foo">Pho</option>');
  return false;
    });
    $('#insert3').click(function(){
       var val = $('#hide3').val();
       var dInput = $('#numberrun').val();
       console.log(dInput);
      $('#numberrun').attr('value', val);
          $('.selected').empty();
      $('.selected').append(
      '<option value="04" selected="selected">อินเตอร์เน็ต</option><option value="foo">Pho</option>');
    return false;
    });
    $('#insert4').click(function(){
      var val = $('#hide4').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
      $('#numberrun').attr('value', val);
        $('.selected').empty();
      $('.selected').append(
      '<option value="05" selected="selected">อื่นๆ</option><option value="foo">Pho</option>');
  return false;
    });
  });
  </script>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
     <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="admin-ui/png/.flaticon-access1.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="admin-ui/png/.flaticon-access1.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="admin-ui/png/.flaticon-access1.png">
    <link rel="apple-touch-icon-precomposed" href="admin-ui/png/.flaticon-access1.png"> -->
    <link rel="shortcut icon" href="icon/favicon.png">
    <link rel="stylesheet" type="text/css" href="admin-ui/flaticon.css">
  </head>


  <body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
          </a>
          <link rel="stylesheet" type="text/css" href="Administration/menu_files/swimbi.css"/>
            <div id="swimbi">
                <ul>
                    <li id="lifirst"><a data-icon="&#xF00B;" href="http://">จัดการใบคำขอ</a>
                        <ul>
                            <li><a data-icon="&#xF0F6;" href="request.php">ใบคำขอทั้งหมด</a></li>
                            <li><a data-icon="&#xF086;" href="addrequest.php">แจ้งงาน</a></li>
                        </ul>
                    </li>
                    <li id="lilast"><a data-icon="&#xF02D;" href="http://">คู่มือ</a>
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
        <div class="tab-pane fade active in" id="smart-green-demo">
          <form action="insertreq.php" method="POST" class="smart-green">
            <h1>กรอกรายละเอียดการขอใช้บริการฝ่ายสารสนเทศ
              <span style="font-size:14px">สำหรับผู้ใช้</span>
            </h1>
              <p>
              <?php 
              $icontelephone = '<img src="category/telephone.png" width=50px height=50px>';
              $iconhardware = '<img src="category/hardware.png" width=50px height=50px>';
              $iconsoftware = '<img src="category/software.png" width=50px height=50px>';
              $iconnetwork = '<img src="category/network.png" width=50px height=50px>';
              $iconother = '<img src="category/other.png" width=50px height=50px>';
              $iconsend = '<img src="category/sent.png" width=50px height=50px>';
               ?>
              <table width="900" height="90" >
                <span style="font-size:18px">ปัญหาของคุณเกิดจาก</span><br>
                <tr>
                  <td>
                    <button class="btn btn-default " id="insert" value="" ><?php echo $icontelephone; ?>
                    <br><span style="font-size:16px"> ระบบโทรศัพท์</span></button>
                  </td>
                  <td>
                    <button class="btn btn-default" style="width:120px"id="insert1" value="<?php echo $idreqhw; ?>"><?php echo $iconhardware; ?>
                    <br><span style="font-size:16px"> ฮาร์ดแวร์</span></button>
                  </td>
                  <td>
                    <button class="btn btn-default" style="width:120px" id="insert2" value="<?php echo $idreqsw; ?>"><?php echo $iconsoftware; ?>
                    <br><span style="font-size:16px"> ซอร์ฟแวร์</span></button>
                  </td>
                  <td>
                    <button class="btn btn-default" style="width:120px" id="insert3" value="<?php echo $idreqnw; ?>"><?php echo $iconnetwork; ?>
                    <br><span style="font-size:16px"> เน็ตเวิร์ค</span></button>
                  </td>
                  <td>
                    <button class="btn btn-default" style="width:120px" id="insert4" value="<?php echo $idreqot; ?>"><?php echo $iconother; ?>
                    <br><span style="font-size:16px"> อื่นๆ</span></button>
                  </td>
                </tr>
              </table>
              <table width="900px">
                <tr>
                  <td>
                    <span>เลขที่ใบคำขอ : </span><input type="text" id="numberrun" name="numberrun" value="" style="width:240px">
                    <input type="hidden" id="hide" value="<?php echo $idreqph; ?>">
                    <input type="hidden" id="hide1" value="<?php echo $idreqhw; ?>">
                    <input type="hidden" id="hide2" value="<?php echo $idreqsw; ?>">
                    <input type="hidden" id="hide3" value="<?php echo $idreqnw; ?>">
                    <input type="hidden" id="hide4" value="<?php echo $idreqot; ?>">  
                    <br>
                    <span>ชื่อผู้ใช้ : </span><input type="text" id="useradd" name="useradd" style="width:280px" value="<?php echo $user_id;?>"><br>
                    <span>แผนก :</span>
                    <select id="selectiondep" name="selectiondep" style="width:300px">
                    <option value=""></option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="01" >IT</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="02">telesale</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="03">broker</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="04">admin</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="05">hr</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="06">research</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="07">qc</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="08">domino</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="09">csi</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="10">health</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="11">chev campaign</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="12">chev cac</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="13">chevyplus</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="14">back office</option>
                    <option <?php if($user_department){ ?>selected<?php }?> value="15">account</option>
                    </select><br>
                <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                  <label>วันที่/เวลา : </label><input type="text" name="date" id="date" value="<?php ini_set('date.timezone', 'Asia/Bangkok');
                  echo date('d M Y - H:i P'); ?>"><span class="add-on"><i class="icon-remove"></i></span><span class="add-on"><i class="icon-th"></i></span>
                </div>
                
                <span>ประเภท : </span><select class="selected" id="cat" name="cat">
                <option>please select</option>
                </select><br>
                  </td>
                  <td><label><span>อาการเบื้องต้น :</span><br><br>
                  <textarea style="width:525px;height:160px"id="message" name="message"></textarea></label>
                  </td>
                </tr>
              <tr>
                <td>
                </td>
                <td align="right">
                 <button class="btn btn-warning" type="submit" ><?php echo $iconsend; ?> ส่ง</button> 
                </td>
              </tr>
              </table>
              <span>&nbsp;</span>
              </form>
        </div>

</div>


    <hr>
      <footer>
        <p>&copy; 412 Academy</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
  $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>






    <!-- date time picking -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
