<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SDCI-Surwayors|Designer|Constructor|Inspector</title>
<script language="javascript">
function OpenPopup(cs_reqnumber)
	{
		//window.location.href="esform.php?cs_reqnumber="+cs_reqnumber;
		window.open('esform.php?cs_reqnumber='+cs_reqnumber);
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
		echo "<table border='1' align='center' width='200'>";
		echo "<tr align='center' bgcolor='#CCCCCC'>
<td>เลขที่</td>
</tr>";
		while($row = mysqli_fetch_array($result))
			{
				echo "<tr align='center'>";
				echo "<td>".$row["cs_name"]."</td>";
	echo "<td><input type='button' name='button' id='button' value='...' onclick='OpenPopup(JPTMCS)'></td> ";
				echo "</tr>";
			
			
			
			
			}
	?>
</body>
</html>