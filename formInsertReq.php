<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
  <title></title>
</head>
<body><center>
  <form action="insertreq.php" method="POST">
    <label>เลขที่ใบคำขอ : </label><input type="text" name="numberrun"><br><br>
    <label>ชื่อผู้ใช้ : </label><input type="text" name="useradd"><br><br>
    <label>แผนก : </label>
    <select name="selectiondep">
    <option>dep1</option>
    <option>dep2</option>
    </select><br><br>
    <label>วันที่ : </label><input type="text" name="date"><br><br>
    <label>ประเภท : </label>
    <select id="cat">
    <option>cat1</option>
    <option>cat2</option>
    </select><br><br>
    <label>อาการเบื้องต้น : </label><input type="textarea" name="message"><br><br>
    <input type="submit" value="ลงทะเบียน"><br><br>
  </form>
</center></body>
</html>




