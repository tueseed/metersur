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

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Surwayer Web App</h1>
	</div>
	<div data-role="content">
	 	<form name="form1" action="check_login.php" method="post">
	    <label for="textinput">ชื่อผู้ใช้งาน:</label>
	    <input type="text" name="textuser" id="textuser" value=""  />
     	<label for="textinput">รหัสผ่าน:</label>
	    <input type="text" name="textpass" id="textpass" value=""  />
	    <input type="submit" value="เข้าสู่ระบบ">
        </form>
	</div>
	<div data-role="footer">
		<h4>Dev By Tueseed</h4>
	</div>
</div>



</body>
</html>
