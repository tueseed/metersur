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
		<h1ประมาณการค่าใช้จ่าย</h1>
	</div>
  <div data-role="content"> 
    <div data-role="content-primary">
      <fieldset data-role="controlgroup">
        <legend class="txt-in">เสา:</legend>
          <select name="phase" id="phase" onchange="select_head_ht(this.value)">
            <option value="N/A">เฟส</option>
            <option value="1">1 เฟส</option>
            <option value="3">3 เฟส</option>
           </select><!--เฟส-->
           <select name="wire" id="wire">
                                <option value="N/A">สาย</option>
                                <option value="319">50 PIC</option>
                                <option value="322">120 PIC</option>
                                <option value="323">185 PIC</option>
                                <option value="332">50 SAC</option>
                                <option value="336">185 SAC</option>
            </select><!--สาย-->
         </fieldset>
    </div>
   </div>
    
    
</div>

</body>
</html>
