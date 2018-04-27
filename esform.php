<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SDCI-Surwayors|Designer|Constructor|Inspector</title>
</head>
<body>
<?php
$cs_reqnumber = $_GET['cs_reqnumber'];
require('./connect-db.php');
		$sql_search = "SELECT * FROM tbl_jobmeter WHERE (cs_reqnumber LIKE '%".$cs_reqnumber."%')";
		$result = mysqli_query($conn,$sql_search);
	   echo "<h1 align='center'>รายละเอียดอุปกรณ์ประกอบมิเตอร์</h1><br>";
		$objectresult = mysqli_fetch_array($result);
		echo "<table border='1' cellspacing='0' align='center' width='900'>
			 	<tr align='center' bgcolor='#CCCCCC'>
			  		<td>ชื่อผู้ขอใช้ไฟ ".$objectresult["cs_name"]."</td>
					<td>ที่อยู่ :".$objectresult["cs_housenum"]."</td>
					<td>เบอร์โทร :".$objectresult["cs_tel"]."</td>";
		
			
			
			
			
			
		
?>
</body>
</html>