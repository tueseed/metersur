<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SDCI-Surwayors|Designer|Constructor|Inspector</title>
<script language="javascript">
function OpenPopup(NUMBER)
	{
		var left = (screen.width/2)-(1000/2);
        var top = (screen.height/2)-(300/2);
		window.open('show.php?NUMBER='+NUMBER,'myPopup','width=1000,height=300,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left='+left+',top='+top);
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
				echo "<td><input type='button' name='button' id='button' value='...' onclick='OpenPopup(".$row["cs_reqnumber"].")'></td> ";
				echo "</tr>";
			
			
			
			
			}
	?>
</body>
</html>