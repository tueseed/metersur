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
$system_dis = $_POST['system_dis'];
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

$sql_insert = "INSERT INTO                tbl_jobmeter(cs_name,cs_lastname,cs_housenum,cs_moo,cs_tombol,cs_aumper,cs_province,cs_tel,cs_reqnumber,l_feedder,l_phase,cable_size,system_dis,system_volt,amp_meter,cable_incoming,pole,num_meter,geo_pos,bolt,numbolt,square_ring,alu_tape,connector,num_connector,box,num_box,cu_wire,num_cu_wire,plate,num_plate,surway_name)VALUES('$cs_name','$cs_lastname','$cs_housenum','$cs_moo','$cs_tombol','$cs_aumper','$cs_province','$cs_tel','$cs_reqnumber','$l_feedder','$l_phase','$cable_size','$system_dis','$system_volt','$amp_meter','$cable_incoming','$pole','$num_meter','$geo_pos','$bolt','$numbolt','$square_ring','$alu_tape','$connector','$num_connector','$box','$num_box','$cu_wire','$num_cu_wire','$plate','$num_plate','$surway_name')";

mysqli_query($conn,$sql_insert);

?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>Page One</h1>
	</div>
	<div data-role="content">	
			<?php
			echo "<h4>ข้อมูลผู้ใช้ไฟฟ้า :</h4>><br>";
			echo "<h5>".$cs_name." ".$cs_lastname."<br><br>";
			echo "ที่อยู่ :<br>";
			echo $cs_housenum." ".$cs_moo." ".$cs_tombol." ".$cs_aumper." ".$cs_province." ".$cs_tel."<br><br>";
			echo "เลขที่คำร้อง :"." ".$cs_reqnumber."</h5><br><br>";
			
			echo "<h4>ข้อมูละบบไฟฟ้า :</h4><br>";
			echo "<h5>สถานีไฟฟ้าย่อย :<br>";
			echo "ฟีดเดอร์แรงต่ำ ".$l_feedder;
			echo "เฟสแรงต่ำ ".$l_phase;
			echo "สายเมนแรงต่ำ :<br>";
			echo "ขนาด ".$cable_size."<br>";
			echo "ระบบ ".$system_dis."<br>";
			echo "ติดตั้งมิเตอร์:<br>";
			echo "ระบบแรงดัน ".$system_volt."<br>";
			echo "ขนาดมิเตอร์ ".$amp_meter."<br>";
			echo "สายแรงต่ำเข้ามิเตอร์ ".$cable_incoming."<br>";
			echo "เสา ".$pole."<br>";
			echo "มิเตอร์ ".$num_meter."<br>";
			echo "<a href='https://www.google.co.th/maps/search/".$geo_pos."'>พิกัด</a></h5><br><br>";
			
			
			echo "<h4>รายละเอียดอุปกรร์การติดตั้ง :</h4><br>";
			echo "<h5>สลักเกลียว ".$bolt."<br>";
			echo "จำนวน ".$numbolt." ชุด<br>";
			echo "แหวนสี่เหลี่ยมแบบเรียบ ".$square_ring." อัน<br>";
			echo "ลวดอลูมิเนียมแบน 1x10 มม. :".$alu_tape." กก.<br>";
			echo "คอนเนคเตอร์บีบ H ".$connector."<br>";
			echo "จำนวน ".$num_connector." อัน<br>";
			echo "ตู้มิเตอร์ ".$box."<br>";
			echo "จำนวน ".$num_box." ตู้<br>";
			echo "สายไฟ<br>";
			echo $cu_wire;
			echo "จำนวน ".$num_cu_wire." เมตร<br>";
			echo $plate."<br>";
			echo "จำนวน ".$num_plate." แผ่น<br>";
			echo "ผู้สำรวจ ".$surway_name;
						
			?>	
	</div>
	
</div>



</body>
</html>