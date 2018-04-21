<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 
<?php
require('./connect-db.php');
$cs_name = $_POST['cs_name'];
$cs_lastname = $_POST['cs_lastname'];
//$sql_insert = "INSERT INTO tbl_jobmeter(cs_name)VALUES('$cs_name')";
//mysqli_query($conn,$sql_insert);

?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>Page One</h1>
	</div>
	<div data-role="content">	
			<?php
			echo $cs_name;
			?>	
	</div>
	
</div>



</body>
</html>