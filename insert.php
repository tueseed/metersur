<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8">
<title>Surwayors-Designer-Constructor-Inspector</title>
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
$cs_housenum =$_POST['cs_housenum'];
$cs_moo = $_POST['cs_moo'];
$cs_tombol = $_POST['cs_tombol'];
$cs_aumper = $_POST['cs_aumper'];
$cs_province = $_POST['cs_province'];
$cs_tel = $_POST['cs_tel'];
$cs_reqnumber = $_POST['cs_reqnumber'];
$l_feedder = $_POST['l_feedder'];
$l_phase = $_POST['l_phase'];
$cable_size = $_POST['cable_size'];
$system_volt = $_POST['system_volt'];
$amp_meter = $_POST['amp_meter'];
$cable_incoming = $_POST['cable_incoming'];
$pole = $_POST['pole'];
$num_meter = $_POST['num_meter'];
$geo_pos = $_POST['geo_pos'];
$bolt = $_POST['bolt'];
$numbolt = $_POST['numbolt'];
$square_ring = $_POST['square_ring'];
$alu_tape = $_POST['alu_tape'];
$connector = $_POST['connector'];
$num_connector = $_POST['num_connector'];
$box = $_POST['box'];
$num_box = $_POST['num_box'];
$cu_wire = $_POST['cu_wire'];
$num_cu_wire = $_POST['num_cu_wire'];
$plate = $_POST['plate'];
$num_plate = $_POST['num_plate'];
$surway_name = $_POST['surway_name'];

$sql_insert = "INSERT INTO                tbl_jobmeter(cs_name,cs_lastname,cs_housenum,cs_moo,cs_tombol,cs_aumper,cs_province,cs_tel,cs_reqnumber,l_feedder,l_phase,cable_size,system_volt,amp_meter,cable_incoming,pole,num_meter,geo_pos,bolt,numbolt,square_ring,alu_tape,connector,num_connector,box,num_box,cu_wire,num_cu_wire,plate,num_plate,surway_name)VALUES('$cs_name','$cs_lastname','$cs_housenum','$cs_moo','$cs_tombol','$cs_aumper','$cs_province','$cs_tel','$cs_reqnumber','$l_feedder','$l_phase','$cable_size','$system_volt','$amp_meter','$cable_incoming','$pole','$num_meter','$geo_pos','$bolt','$numbolt','$square_ring','$alu_tape','$connector','$num_connector','$box','$num_box','$cu_wire','$num_cu_wire','$plate','$num_plate','$surway_name')";

mysqli_query($conn,$sql_insert);

?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>Page One</h1>
	</div>
	<div data-role="content">	
			<?php
			echo "ชื่อผู้ใช้ไฟ :".$cs_name." ".$cs_lastname."<br><br>";
			echo "ที่อยู่ :<br>";
			echo $cs_housenum." ".$cs_moo." ".$cs_tombol." ".$cs_aumper." ".$cs_province." ".$cs_tel."<br><br>";
			echo "เลขที่คำร้อง :"." ".$cs_reqnumber;
			echo "รายละเอียดระบบไฟฟ้า :<br>";
			
			?>	
	</div>
	
</div>



</body>
</html>