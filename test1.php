;newPositionMarker;<?php
  session_start();
  include("connect.php");
  include('addreqph.php');
  $idreqph = phonesystem();
  $idreqhw = hardware();
  $idreqsw = software();
  $idreqnw = network();
  $idreqot = other();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</script>
  <script>
  $(document).ready(function(){
    $('#insert').click(function(){
      window.alert("กรุณาระบุอาการเบื้องต้น");
      var val = $('#hide').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
      $('#numberrun').attr('value', val);
			$('.selected').empty();
			$('.selected').append(
			'<option value="foo" selected="selected">ระบบโทรศัพท์</option><option value="foo">Pho</option>');
      return false;
    });
    $('#insert1').click(function(){
      window.alert("กรุณาระบุอาการเบื้องต้น");
      var val = $('#hide1').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
    $('#numberrun').attr('value', val);
			$('.selected').empty();
			$('.selected').append(
			'<option value="foo" selected="selected">ฮาร์ดแวร์</option><option value="foo">Pho</option>');
    return false;
    });
    $('#insert2').click(function(){
      window.alert("กรุณาระบุอาการเบื้องต้น");
      var val = $('#hide2').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
      $('#numberrun').attr('value', val);
      		$('.selected').empty();
			$('.selected').append(
			'<option value="foo" selected="selected">ซอร์ฟแวร์</option><option value="foo">Pho</option>');
	return false;
    });
    $('#insert3').click(function(){
       window.alert("กรุณาระบุอาการเบื้องต้น");
       var val = $('#hide3').val();
       var dInput = $('#numberrun').val();
       console.log(dInput);
      $('#numberrun').attr('value', val);
        	$('.selected').empty();
			$('.selected').append(
			'<option value="foo" selected="selected">อินเตอร์เน็ต</option><option value="foo">Pho</option>');
    return false;
    });
    $('#insert4').click(function(){
      window.alert("กรุณาระบุอาการเบื้องต้น");
      var val = $('#hide4').val();
      var dInput = $('#numberrun').val();
      console.log(dInput);
      $('#numberrun').attr('value', val);
     		$('.selected').empty();
			$('.selected').append(
			'<option value="foo" selected="selected">อื่นๆ</option><option value="foo">Pho</option>');
	return false;
    });
  });
  </script>

</head>
<body>
<!-- swimbi code start -->
<link rel="stylesheet" type="text/css" href="menu_files/swimbi.css"/>
<div id="swimbi">
    <ul>
        <li><a data-icon="&#xF00B;" href="http://">จัดการใบคำขอ</a>
            <ul>
                <li><a data-icon="&#xF002;" href="http://">ค้นหาใบคำขอ</a></li>
                <li><a data-icon="&#xF0FE;" href="#">เพิ่มใบคำขอ</a></li>
            </ul>
        </li>
        <li><a data-icon="&#xF02D;" href="http://">คู่มือ</a></li>
    </ul>
<canvas><noscript><img alt="Get of swimbi" src="http://swimbi.com/img/swbnr1.png" /> generated by swimbi.com. All Rights Reserved</noscript></canvas>
<div id="ie_message"><noscript>Local test in IE is better if you "<a href="http://f-source.com/swimbi/ie-allow-blocked-content/" target="_blank">Allow blocked content</a>" - click the button below.</noscript></div>
</div>
<script src="menu_files/swimbi.js"></script>
<!-- swimbi code end -->

<center>
	<button id="insert" value="<?php echo $idreqhw; ?>"><span> ระบบโทรศัพท์</span></button>
    <button id="insert1" value="<?php echo $idreqhw; ?>"><span> ฮาร์ดแวร์</span></button>
    <button id="insert2" value="<?php echo $idreqsw; ?>"><span> ซอร์ฟแวร์</span></button>
    <button id="insert3" value="<?php echo $network; ?>"><span> เน็ตเวิร์ค</span></button>
    <button id="insert4" value="<?php echo $other; ?>"><span> อื่นๆ</span></button>
    <br><br>
    <span>เลขที่ใบคำขอ : </span><input type="text" id="numberrun" value="" style="width:240px">
    <input type="hidden" id="hide" value="<?php echo $idreqph; ?>">
    <input type="hidden" id="hide1" value="<?php echo $idreqhw; ?>">
    <input type="hidden" id="hide2" value="<?php echo $idreqsw; ?>">
    <input type="hidden" id="hide3" value="<?php echo $idreqnw; ?>">
    <input type="hidden" id="hide4" value="<?php echo $idreqot; ?>">  <br>
<br>
<span>ประเภท : </span><select class="selected">
	<option>please select</option>
</select>
</center>
</body>
</html>