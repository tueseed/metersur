<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SDCI-Surwayors|Designer|Constructor|Inspector</title>
<script language="javascript">
function OpenPopup(cs_reqnumber)
	{
		//window.location.href="esform.php?cs_reqnumber="+cs_reqnumber;
		window.open('esform.php?cs_reqnumber='+cs_number);
	}
</script>
	<?php
		require('./connect-db.php');
		$sql_select = "SELECT * FROM tbl_jobmeter";
		$result = mysqli_query($conn,$sql_select);
	?>
</head>
<body>
	<?php
		echo "<table border='1' style='solid' align='center' width='900'>";
		echo "<tr align='center' bgcolor='#CCCCCC'>
<td>ชื่อผู้ใช้ไฟฟ้า</td>
<td>เลขที่คำร้อง</td>
</tr>";
		while($row = mysqli_fetch_array($result))
			{
				echo "<tr align='center'>";
				echo "<td>".$row["cs_name"]."</td>";
				echo "<td>".$row["cs_reqnumber"]."</td>";
	//echo "<td><input type='button' name='button' id='button' value='...' onclick='OpenPopup(".$row["cs_reqnumber"].")'></td> ";
				echo "<td><a href='esform.php?cs_reqnumber=".$row["cs_reqnumber"]."'>แบบฟอร์ม</a></td>";
				echo "</tr>";
			
			
			
			
			}
	?>
</body>
</html>