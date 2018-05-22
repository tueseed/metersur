<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8">
<title>Surwayer Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>ประมาณการค่าใช้จ่าย</h1>
	</div>
    <div data-role="content"> 
        <?php
        echo "ชื่อลูกค้า ".$_SESSION["cs_name"]."<br>";
        echo "เลขที่คำร้อง ".$_SESSION["req_num"]."<br>";
        echo "ที่อยู่ ".$_SESSION["addr"]."<br>";
        echo "เบอร์โทรติดต่อ ".$_SESSION["cs_tel"]."<br>";
        ?>
    </div>   
</div>

</body>
</html>