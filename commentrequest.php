
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Comment Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="request/admin-ui/flaticon.css">
    <link href="datetimepicking/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> 

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">IT-Request</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <strong>Logged in as : </strong><a href="#" class="navbar-link"><font size="2">username</font></a>
            </p>
            <ul class="nav">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i>  ขอใช้บริการ <b class="caret"></b>
              </a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">จัดการใบคำขอ</li>
                    <li><a href="request.php"><i class="icon1-search"></i>  ดูใบคำขอ</a></li>
                    <li><a href="addrequest.php"><i class="icon1-plus-sign"></i>  เพิ่มใบคำขอ</a></li>
                    <li><a href="commentrequest.php"><i class="icon1-edit"></i>  ตอบกลับใบคำขอ</a></li>
                  </ul>
                  </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book"></i>  คู่มือการใช้งาน</a>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      </div>

    <div class="container">
      <div class="tab-content">
        <div class="tab-pane fade active in" id="smart-green-demo">
          <form action="" method="post" class="smart-green">
            <h1>ตอบกลับคำขอใช้บริการ
              <span style="font-size:14px">สำหรับฝ่ายสารสนเทศ</span>
            </h1>
              <p>
              <span>เลขที่ใบคำขอ :</span><label id="name" type="text" name="name"></label><br>
              <span>ผู้รับงาน :</span>
              <select name="selection"><option value="Job Inquiry">back office</option>
                <option value="General Question">telesale</option>
                <option value="General Question">domino</option>
                <option value="General Question">cac</option>
                <option value="General Question">csi</option>
                <option value="General Question">research</option>
              </select><br>
              <span>ชื่อผู้ขอใช้บริการ :   </span><label id="name" type="text" name="name"><br>
              <span>แผนก :   </span><label id="name" type="text" name="name"><br><br>
              <span>ประเภทคำขอ :   </span><label id="name" type="text" name="name"><br><br>
              <span>อาการเบื้องต้น :   </span><label id="name" type="text" name="name"><br><br>
              <label><span>ระบุวิธีแก้/คำแนะนำการใช้งาน :</span><textarea id="message" name="message"></textarea></label><br>
              <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
              <label>วันที่ เวลา ที่คาดว่าจะเสร็จงาน</label>
                  <input  style="width:20%" size="16" type="text" value="" readonly="">
                  <span class="add-on"><i class="icon-remove"></i></span>
                  <span class="add-on"><i class="icon-th"></i></span>
                </div>
              <span>&nbsp;</span><input type="button" class="button" value="Submit"></p></form>
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
