<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Surwayer Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
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
	
<div data-role="page" id="page">
	<div data-role="header">
		<h1>Surwayer Web App</h1>
	</div>
	
	<div data-role="footer">
		<h4>Dev By Tueseed</h4>
	</div>
</div>



</body>
</html>
