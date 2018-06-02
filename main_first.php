<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8">
<title>Surwayer Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<style>
.txt{
    text-align: center;
}
.txt-a{
        color:LightCoral;
        background-color: none;
        text-shadow: none;
    }
</style>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>ประมาณการค่าใช้จ่าย</h1>
	</div>
    <div data-role="content"> 
        <form action="first_est.php"name="pole-add-form" id="pole-add-form" method="POST">
        <h3>ชื่อลูกค้า:</h3>
        <input type="text" name="cs_name" id="cs_name" value="" placeholder="ชื่อ-นามสกุล"/>
        <h3>เลขที่คำร้อง:</h3>
        <input type="text" name="req_num" id="req_num" value="" placeholder="เลขที่คำร้อง"/>
        <h3>ที่อยู่:</h3>
        <input type="text" name="addr" id="addr" value="" placeholder="ที่อยู่"/>
        <h3>เบอร์โทรติดต่อ:</h3>
        <input type="text" name="cs_tel" id="cs_tel" value="" placeholder="เบอร์โทรศัพท์"/>
        <div><input type="submit" value="ตกลง"></div>
        </form>
    </div>   
</div>

</body>
</html>