<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
				echo "</tr>";
			
			
			
			
			}
	?>
</body>
</html>