<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สมัครสมาชิกเพื่อทำการจองร้านอาหาร</title>
</head>

<body>
 <h1>สมัครสมาชิกเพื่อทำการจองร้านอาหาร</h1>
 <form method="post" action="">
 คำนำหน้าชื่อ
        <input type="radio" name="name" value="นาย"> นาย
        <input type="radio" name="name" value="นาง"> นาง
        <input type="radio" name="name" value="นางสาว"checked>นางสาว
        <br><br>
 
  ชื่อ-สกุล <input type="text" name="a" required><br><br>
  อายุ
  <input type="number" name="b" min="0" max="100" 
  required autofocus><br><br>
  วันเดือนปีเกิด
  <input type="date" name="e">
	<br><br>
   ที่อยู๋
   <textarea name="address" cols="29.5" rows="4"></textarea>
     <br><br>
   เบอร์โทรศัพท์
    <input type="text" name="f" required><br><br>
    รหัสไปรษณีย์
    <input type="text" name="g" required><br><br>
   
   กรุณาเลือกช่วงเวลา
        <input type="radio" name="time" value="10:00 am" > 10:00 am
        <input type="radio" name="time" value="12:00 pm" > 12:00 pm
        <input type="radio" name="time" value="13:00 pm" > 13:00 pm
        <input type="radio" name="time" value="14:00 pm" > 14:00 pm
        <input type="radio" name="time" value="15:00 pm" > 15:00 pm
        <input type="radio" name="time" value="16:00 pm" > 16:00 pm
        <input type="radio" name="time" value="17:00 pm" > 17:00 pm
        <input type="radio" name="time" value="18:00 pm" > 18:00 pm
        <br><br>
        <br><br>
        
     Username
      <input type="text" name="h" required><br><br>
     Password
      <input type="password" name="i" required><br><br>
        
    <button type="Submit" name="Submit">สมัครสมาชิก</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์หน้านี้</button>
 </form>
 <hr>

<?php
if(isset($_POST['Submit'])){
	echo @$_POST['name']."<br>";
	echo @$_POST['a']."<br>";
	echo @$_POST['b']."<br>";
	echo @$_POST['e']."<br>";
	echo @$_POST['address']."<br>";
	echo @$_POST['f']."<br>";
	echo @$_POST['g']."<br>";
	echo @$_POST['h']."<br>";
	echo @$_POST['i']."<br>";
	echo @$_POST['time']."<br>";
	
}
?>
</body>
</html>