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
		while($row = mysqli_fetch_array($result))
			{
				echo "<tr align='center'>";
				echo "<td>".$row["cs_name"]."</td>";
				echo "</tr>";
			
			
			
			
			}
	?>
</body>
</html>
