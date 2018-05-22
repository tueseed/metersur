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
        <legend>เสา 1:</legend>
            <select name="pole_1" id="pole_1">
                <option value="N/A">เลือกเสา</option>
                <option value="8">8 เมตร</option>
                <option value="9">9 เมตร</option>
                <option value="12">12 เมตร</option>
                <option value=12.20>12.20 เมตร</option>
                <option value="14">14 เมตร</option>
                <option value="14.30">14.30 เมตร</option>
            </select><!--เฟส-->
        <legend class="txt-in">จำนวน:</legend>
            <input type="tel" name="num_pole_1" id="num_pole_1" value=""/>

        <legend>เสา 2:</legend>
            <select name="pole_2" id="pole_2">
                <option value="N/A">เลือกเสา</option>
                <option value="8">8 เมตร</option>
                <option value="9">9 เมตร</option>
                <option value="12">12 เมตร</option>
                <option value=12.20>12.20 เมตร</option>
                <option value="14">14 เมตร</option>
                <option value="14.30">14.30 เมตร</option>
            </select><!--เฟส-->
        <legend class="txt-in">จำนวน:</legend>
            <input type="tel" name="num_pole_2" id="num_pole_2" value=""/>
        
        <legend>เสา 3:</legend>
            <select name="pole_3" id="pole_3">
                <option value="N/A">เลือกเสา</option>
                <option value="8">8 เมตร</option>
                <option value="9">9 เมตร</option>
                <option value="12">12 เมตร</option>
                <option value=12.20>12.20 เมตร</option>
                <option value="14">14 เมตร</option>
                <option value="14.30">14.30 เมตร</option>
            </select><!--เฟส-->
        <legend >จำนวน:</legend>
            <input type="tel" name="num_pole_3" id="num_pole_3" value=""/>
    </div>   
</div>

</body>
</html>