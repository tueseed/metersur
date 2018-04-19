<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Surwayer Web App</title>

</head> 
<body> 
<?php
	require('./connect-db.php');
	session_start();
	$U = $_POST['textuser'];
	$P = $_POST['textpass'];

		//$sql = "SELECT * FROM tbl_staff";
		
		//$query_type = mysqli_query($conn,$sql_type);
		
		//while($ofname = mysqli_fetch_array($query)){ 
		//	$ofname1 = $ofname["office_name"];
		//}
	echo $U;
	?>
	

</body>
</html>
