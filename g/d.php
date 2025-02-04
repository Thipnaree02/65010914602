<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ทิพย์นารี เพตาเสน (ตันหยง</title>
</head>

<body>
	<h1>ทิพย์นารี เพตาเสน (ตันหยง) </h1>
    
	<form method="post" action="">
    	จำนวน <input type="number" min="1" max="1000" name="a" required autofocus>
        <button type="submit" name="Submit">OK</button>
    </form> <hr>
    
<?php
	if (isset($_POST['Submit'])) {
		$c = $_POST['a'];
		echo "แสดงจำนวน $c รูป <br><br>";
		for($i=1; $i<=$c; $i++){
?>
	<img src="4.jpg" width="250">
<?php 
	} // end for
	} // end if ?>
</body>
</html>