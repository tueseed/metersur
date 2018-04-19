<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
	
<body> 
<?php
		require('./connect-db.php');
		$sql = "SELECT * FROM tbl_staff";
		$query = mysqli_query($conn,$sql);
		while($ofname = mysqli_fetch_array($query)){ 
			echo $ofname;
		}
	?>

</body>
</html>
