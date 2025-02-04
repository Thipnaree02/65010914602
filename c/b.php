<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ทิพย์นารี เพตาเสน (ตันหยง</title>
</head>

<body>
	<h1>ทิพย์นารี เพตาเสน (ตันหยง)</h1>
    
    <form method="post" action="">
    	ตัวเลข <input type="number" name="a" min="0" max="100" 
        required autofocus><br>
        ขื่อ-สกุล <input type="text" name="b" required>
        <br>
        จังหวัด
        <select name="province">
        	<option value="ศรีสะเกษ">ศรีสะเกษ</option>
        	<option value="มหาสารคาม">มหาสารคาม</option>
        	<option value="ขอนแก่น">ขอนแก่น</option>
        	<option value="อุบลราชธานี">อุบลราชธานี</option>
            <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
        </select>
        <br>
        วันเดือนปีเกิด
        <input type="date" name="birthday">
        <br><br>
        <button type="submit" name="submit">OK</button>
        <button type="reset">ยกเลิก</button>
        <button type="button" onClick="window.print();">พิมพ์</button>
    </form>
    <hr>
    
<?php
	if(isset($_POST['Submit'])){
		echo "ตัวเลข: ".@$_POST['a']."<br>";
		echo "ชื่อ-สกุล ".@$_POST['b']."<br>";
		echo "จังหวัด ".@$_POST['province']."<br>";
		echo "วันเดือนปีเกิด ".@$_POST['birthday']."<br>";
	}
?>
</body>
</html>