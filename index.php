<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="request/admin-ui/flaticon.css"> 

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
   <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #FFFFF8;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #FFDB9C;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
        font-size: 18px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 4px 9px;
      }

    </style>
  </head>
  <link rel="shortcut icon" href="icon/favicon.png">
  <body>

    <div class="container">

      <form action="login.php" method="get" class="form-signin">
        <font style="font-family: 'Tahoma'">
        <center><img class="mouseHeader" src="icon/it-logo3-4801.png" alt="Outlook Web App "></center>
        <h2 class="form-signin-heading"><center>กรุณาล็อกอินเข้าสู่ระบบ</center></h2>
        <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-user"></i></span>
              <input class="span2" id="inputIcon" type="text" name="username" value="" placeholder="User Name">
            </div>
            <div class="input-prepend">
              <span class="add-on"><i class="icon-lock"></i></span>
              <input class="span2" id="inputIcon" type="password" name="password" placeholder="Password" value="">
            </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-warning" type="submit">Log In</button>
        </font>
      </form>
    </div> <!-- /container -->
    <script src="js/jquery.js"></script>
  </body>
</html>
