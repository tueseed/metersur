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
        <fieldset data-role="controlgroup">
            <legend class="txt-in">เสา:</legend>
            <select name="phase" id="phase" onchange="select_head_ht(this.value)">
                <option value="N/A">เฟส</option>
                <option value="1">1 เฟส</option>
                <option value="3">3 เฟส</option>
            </select><!--เฟส-->
        </fieldset>
    </div>   
</div>

</body>
</html>