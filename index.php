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
		$objResult = mysqli_fetch_array($query);
		echo $objResult;
	?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>Page One</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview">
			<li><a href="#page2">Page Two</a></li>
            <li><a href="#page3">Page Three</a></li>
			<li><a href="#page4">Page Four</a></li>
		</ul>		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page2">
	<div data-role="header">
		<h1>Page Two</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header">
		<h1>Page Three</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

<div data-role="page" id="page4">
	<div data-role="header">
		<h1>Page Four</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>

</body>
</html>
