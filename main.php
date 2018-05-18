<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," data-ajax="false" charset="utf-8">
<title>Surwayer Web App</title>
<!--<link rel="stylesheet" href="icons.css">-->
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtHjInoM1BliI3d-f_WiuzY6TLA5drFs&callback=myMap"></script>-->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtHjInoM1BliI3d-f_WiuzY6TLA5drFs&callback=initMap"
  type="text/javascript"></script>
  
<script>


function getLocation() {
	
    if (navigator.geolocation) {
		var option ={enableHighAccuracy: false,timeout: 10000,maximumAge: 600000};
        navigator.geolocation.getCurrentPosition(showPosition,error,option);
    } else {
        
		document.getElementById("geo_pos").value = "ไม่สามารถคนหาตำแหน่งได้";
		document.getElementById("accu").value = "ไม่สามารถคนหาตำแหน่งได้";
		
    }
}
function showPosition(position) {
	
   	document.getElementById("geo_pos").value = position.coords.latitude + 
    "," + position.coords.longitude;
	document.getElementById("accu").value = position.coords.accuracy;
	var mapOption ={
			center: new google.maps.LatLng(position.coords.latitude,position.coords.longitude),	
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.HYBRID		
		}
	var lat = position.coords.latitude;
	var lon = position.coords.longitude;
	var uluru = {lat:lat,lng:lon};
	var map = new google.maps.Map(document.getElementById("map"),mapOption)
	var marker = new google.maps.Marker({position: uluru,map:map})
	
}
function error(){
		document.getElementById("geo_pos").value = "ไม่สามารถคนหาตำแหน่งได้";
		document.getElementById("accu").value = "ไม่สามารถคนหาตำแหน่งได้";} 


//Function get lat long and put it in textbox



</script>
<style type="text/css">
div#map { margin: 0 auto 0 auto; }
</style>

</head> 
<body onLoad="getLocation()"> 
<div data-role="page" id="page">
	<div data-role="header">
		<h1>สำรวจมิเตอร์</h1>
	</div>
    <form  name="form1" action="insert.php" method="post">
	<div data-role="content">	
    	<h4>ข้อมูลผู้ใช้ไฟฟ้า :</h4>
        		
    	    	  <label for="cs_name">ชื่อผู้ใช้ไฟฟ้า:</label>
    	  		  <input type="text" name="cs_name" id="cs_name" value=""  />
                  
  				  <label for="cs_lastname">นามกสุลผู้ใช้ไฟฟ้า:</label>
    	  		  <input type="text" name="cs_lastname" id="cs_lastname" value=""  />
                  
                  <label for="cs_housenumber">บ้านเลขที่:</label>
    	  		  <input type="text" name="cs_housenum" id="cs_housenum" value=""  />
                  
                  <label for="cs_moo">หมู่ที่:</label>
    	  		  <input type="text" name="cs_moo" id="cs_moo" value=""  />
                  
                  <label for="cs_tombol">ตำบล:</label>
    	  		  <input type="text" name="cs_tombol" id="cs_tombol" value=""  />
                  
                  <label for="cs_aumper">อำเภอ:</label>
    	  		  <input type="text" name="cs_aumper" id="cs_aumper" value=""  />
                  
                  <label for="cs_province">จังหวัด:</label>
    	  		  <input type="text" name="cs_province" id="cs_province" value=""  />
                  
                  <label for="cs_tel">เบอร์โทรศัพท์:</label>
    	  		  <input type="text" name="cs_tel" id="cs_tel" value=""  />
                  
                  <label for="cs_reqnumber">คำร้องเลขที่:</label>
    	  		  <input type="text" name="cs_reqnumber" id="cs_reqnumber" value=""  />
        
		<h4>ข้อมูลระบบไฟฟ้า :</h4>
            <h5>สถานีไฟฟ้าย่อย :</h5>
        		<select name="l_feedder" id="l_feedder">
            		<option value="เลือกฟีดเดอร์แรงต่ำ">เลือกฟีดเดอร์แรงต่ำ</option>
            		<option value="1">1</option>
            		<option value="2">2</option>
                    <option value="3">3</option>
            		<option value="4">4</option>
                    <option value="5">5</option>
            		<option value="6">6</option>
                    <option value="7">7</option>
            		<option value="8">8</option>
                    <option value="9">9</option>
            		<option value="10">10</option>
         		</select>
           		<select name="l_phase" id="l_phase">
                	<option value="option1">เลือกเฟสแรงต่ำ</option>
            		<option value="A">A</option>
            		<option value="B">B</option>
            		<option value="C">C</option>
                    <option value="ABC">ABC</option>
         		</select>
             <h5>สายเมนแรงต่ำ :</h5>
             	<select name="cable_size" id="cable_size">
                	<option value="เลือกขนาดสาย" selected>เลือกขนาดสาย</option>
                    <option value="6 ตร.มม.">6 ตร.มม.</option>
            		<option value="10 ตร.มม.">10 ตร.มม.</option>
            		<option value="16 ตร.มม.">16 ตร.มม.</option>
            		<option value="25 ตร.มม.">25 ตร.มม.</option>
                    <option value="35 ตร.มม.">35 ตร.มม.</option>
            		<option value="50 ตร.มม.">50 ตร.มม.</option>
                    <option value="70 ตร.มม.">70 ตร.มม.</option>
            		<option value="95 ตร.มม.">95 ตร.มม.</option>
                    <option value="120 ตร.มม.">120 ตร.มม.</option>
            	</select> 
                <select name="system_dis" id="system_dis">
                	<option value="เลือกระบบ">เลือกระบบ</option>
            		<option value="1 เฟส 2 สาย">1 เฟส 2 สาย</option>
            		<option value="3 เฟส 4 สาย">3 เฟส 4 สาย</option>
            	</select>
 			  <h5>ติดตั้งมิเตอร์ :</h5>
              	<select name="system_volt" id="system_volt">
                	<option value="เลือกระบบ-แรงดัน">เลือกระบบ-แรงดัน</option>
            		<option value="1 เฟส 2 สาย 220 โวลท์">1 เฟส 2 สาย 220 โวลท์</option>
            		<option value="3 เฟส 4 สาย 220/380 โวลท์">3 เฟส 4 สาย 220/380 โวลท์</option>
            	</select>
                <select name="amp_meter" id="amp_meter">
                	<option value="เลือกขนาดมิเตอร์">เลือกขนาดมิเตอร์</option>
            		<option value="5(15) แอมป์">5(15) แอมป์</option>
            		<option value="15(45) แอมป์">15(45) แอมป์</option>
                    <option value="30(100) แอมป์">30(100) แอมป์</option>
            	</select>
                <select name="cable_incoming" id="cable_incoming">
                	<option value="เลือกขนาสายแรงต่ำเข้ามิเตอร์">เลือกขนาสายแรงต่ำเข้ามิเตอร์</option>
            		<option value="6 ตร.มม.">6 ตร.มม.</option>
            		<option value="10 ตร.มม.">10 ตร.มม.</option>
            		<option value="16 ตร.มม.">16 ตร.มม.</option>
            		<option value="25 ตร.มม.">25 ตร.มม.</option>
                    <option value="35 ตร.มม.">35 ตร.มม.</option>
            		<option value="50 ตร.มม.">50 ตร.มม.</option>
                    <option value="70 ตร.มม.">70 ตร.มม.</option>
            		<option value="95 ตร.มม.">95 ตร.มม.</option>
                </select>
               	<select name="pole" id="pole">
                	<option value="เลือกเสา">เลือกเสา</option>
                    <option value="6 เมตร">6 เมตร</option>
            		<option value="8 เมตร">8 เมตร</option>
            		<option value="9 เมตร">9 เมตร</option>
                    <option value="12 เมตร">12 เมตร</option>
                    <option value="12.20 เมตร">12.20 เมตร</option>
                    <option value="14 เมตร">14 เมตร</option>
                    <option value="14.30 เมตร">14.30 เมตร</option>
            	</select>
                <select name="num_meter" id="num_meter">
                	<option value="มิเตอร์เครื่องที่">มิเตอร์เครื่องที่</option>
            		<option value="เครื่องที่ 1">เครื่องที่ 1</option>
            		<option value="เครื่องที่ 2">เครื่องที่ 2</option>
                    <option value="เครื่องที่ 3">เครื่องที่ 3</option>
                    <option value="เครื่องที่ 4">เครื่องที่ 4</option>
                    <option value="เครื่องที่ 5">เครื่องที่ 5</option>
                    <option value="เครื่องที่ 6">เครื่องที่ 6</option>
                    <option value="เครื่องที่ 7">เครื่องที่ 7</option>
                    <option value="เครื่องที่ 8">เครื่องที่ 8</option>
            	</select>
                <label for="textinput">พิกัดตำแหน่ง :<a href="javascript:getLocation();">  ค้นหาตำแหน่ง</a></label>
      			<input name="geo_pos" id="geo_pos" type="text">
				<label for="textinput">ค่าความผิดพลาด:</label>
                <input type="text" name="accu" id="accu" value="">
                
                
                             
    </div>
	<div id="map" style="text-align:center;width:80%;height:450px;background:yellow" ></div>
    <div data-role="content">	
		<label for="textinput">อื่นๆ:</label>
        <input type="text" name="textinput" id="textinput" value=""  />
     <h4>รายละเอียดอุปกรณ์การติดตั้ง :</h4>
     <h5>สลักเกลียว(ชุด) :</h5>	
     	<select name="bolt" id="bolt">
                	<option value="สลักเกลียว M16x170mm.">สลักเกลียว M16x170mm.</option>
            		<option value="สลักเกลียว M16x200mm.">สลักเกลียว M16x200mm.</option>
                    <option value="สลักเกลียว M16x250mm.">สลักเกลียว M16x250mm.</option>
                    <option value="สลักเกลียว M16x300mm.">สลักเกลียว M16x300mm.</option>
                    <option value="สลักเกลียว M16x350mm.">สลักเกลียว M16x350mm.</option>
                    <option value="สลักเกลียว M16x400mm.">สลักเกลียว M16x400mm.</option>
            	</select>
        <label for="textinput">จำนวน:</label>
        <input type="tel" name="numbolt" id="numbolt" value=""  />
	  <h5>แหวนสี่เหลี่ยมรองแบบเรียบ(อัน) :</h5>
    	<label for="textinput">จำนวน:</label>
        <input type="tel" name="square_ring" id="square_ring" value=""  />
      <h5>ลวดอลูมิเนียมแบน 1x10 มม.(กก.) :</h5>
    	<label for="textinput">จำนวน:</label>
        <input type="tel" name="alu_tape" id="alu_tape" value=""  />
       <h5>คอนเนคเตอร์บีบ H(อัน):</h5>
    	  <select name="connector" id="connector">
                	<option value="35-50/6-10 ตร.มม.">35-50/6-10 ตร.มม.</option>
            		<option value="50-95/16-35 ตร.มม.">50-95/16-35 ตร.มม.</option>
          </select> 
    	  <label for="textinput">จำนวน:</label>
          <input type="tel" name="num_connector" id="num_connector" value=""  />
    	<h5>ตู้มิเตอร์:</h5>
    	  <select name="box" id="box">
                	<option value="ตู้อลูมิเนียมใช้นอกอาคาร 3 เฟส">ตู้อลูมิเนียมใช้นอกอาคาร 3 เฟส</option>
            		<option value="ตู้พร้อม CT แรงต่ำ">ตู้พร้อม CT แรงต่ำ</option>
          </select> 
    	  <label for="textinput">จำนวน:</label>
          <input type="tel" name="num_box" id="num_box" value=""  />
    	<h5>สายไฟ(เมตร):</h5>
    	  <select name="cu_wire" id="cu_wire">
                	<option value="สายทองแดงตีเกลียวหุ้มฉนวน 2x6 ต.มม. 600 Volt">สายทองแดงตีเกลียวหุ้มฉนวน 2x6 ต.มม. 600 Volt</option>
            		<option value="สายทองแดงตีเกลียวหุ้มฉนวน 2x10 ต.มม. 600 Volt">สายทองแดงตีเกลียวหุ้มฉนวน 2x10 ต.มม. 600 Volt</option>
          </select> 
    	  <label for="textinput">จำนวน:</label>
          <input type="tel" name="num_cu_wire" id="num_cu_wire" value=""  />
        <h5>ไม้แป้น(แผ่น):</h5>
    	  <select name="plate" id="plate">
                	<option value="ไม้แป้นขนาด2x20x20ซม.">ไม้แป้นขนาด2x20x20ซม.</option>
            		<option value="ไม้แป้นขนาด2x20x60ซม.">ไม้แป้นขนาด2x20x60ซม.</option>
                    <option value="ไม้แป้นขนาด2x20x120ซม.">ไม้แป้นขนาด2x20x120ซม.</option>
          </select> 
    	  <label for="textinput">จำนวน:</label>
          <input type="tel" name="num_plate" id="num_plate" value=""  />
         <h5>ข้อมูลผู้สำรวจ:</h5>
          <label for="textinput">ชื่อ-นามสกุล:</label>
          <input type="text" name="surway_name" id="surway_name" value=""  />
    </div>
    <input type="submit" value="Submit!!">
    
</div>
</form>
</body>
</html>
