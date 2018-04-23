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
		$sql_search = "SELECT * FROM tbl_jobmeter";
		$result = mysqli_query($conn,$sql_search);
		$objectresult = mysqli_fetch_array($result);
echo $objectresult["cs_name"];
?>
</body>
</html>