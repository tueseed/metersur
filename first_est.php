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
<?php
require('./connect-db.php');
session_start();
$_SESSION["cs_name"] = $_POST["cs_name"];
$_SESSION["req_num"] = $_POST["req_num"];
$_SESSION["addr"] = $_POST["addr"];
$_SESSION["cs_tel"] = $_POST["cs_tel"];
?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>ประมาณการค่าใช้จ่าย</h1>
	</div>
    <div data-role="content"> 
    <form  action="cal.php" name="pole-add-form" id="pole-add-form" method="POST">
        <div>
                <?php
                echo "ชื่อลูกค้า ".$_SESSION["cs_name"]."<br>";
                echo "เลขที่คำร้อง ".$_SESSION["req_num"]."<br>";
                echo "ที่อยู่ ".$_SESSION["addr"]."<br>";
                echo "เบอร์โทรติดต่อ ".$_SESSION["cs_tel"]."<br>";
                ?>
        </div>
        <div data-role="collapsible-set" data-content-theme="d" id="set">
            <div data-role="collapsible" id="set1" data-collapsed="true" class="in-group">
                <h3><span class="in-group-1" id="in-group-1">เสาไฟฟ้า</span></h3>
                    <select name="pole_1" id="pole_1">
                        <option value="N/A">เลือกเสา</option>
                        <?php
                            $sql_pole = "SELECT * FROM tbl_price WHERE type = 'p'";
                            $result = mysqli_query($conn,$sql_pole);
                            while($objResult = mysqli_fetch_array($result)){
                                echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                           }
                           mysqli_data_seek($result,0);
                        ?>  
                    </select><!--เฟส-->
                    <input type="tel" name="num_pole_1" id="num_pole_1" value="" placeholder="จำนวน"/>
                    <select name="pole_2" id="pole_2">
                        <option value="N/A">เลือกเสา</option>
                        <?php
                            $sql_pole = "SELECT * FROM tbl_price WHERE type = 'p'";
                            $result = mysqli_query($conn,$sql_pole);
                            while($objResult = mysqli_fetch_array($result)){
                                echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                           }
                           mysqli_data_seek($result,0);
                        ?>  
                    </select><!--เฟส-->
                    <input type="tel" name="num_pole_2" id="num_pole_2" value="" placeholder="จำนวน"/>
                    <select name="pole_3" id="pole_3">
                        <option value="N/A">เลือกเสา</option>
                        <?php
                            $sql_pole = "SELECT * FROM tbl_price WHERE type = 'p'";
                            $result = mysqli_query($conn,$sql_pole);
                            while($objResult = mysqli_fetch_array($result)){
                                echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                           }
                           mysqli_data_seek($result,0);
                        ?>  
                    </select><!--เฟส-->
                    <input type="tel" name="num_pole_3" id="num_pole_3" value="" placeholder="จำนวน"/>
            </div>
        </div>
        <div data-role="collapsible-set" data-content-theme="d" id="set">
            <div data-role="collapsible" id="set1" data-collapsed="true" class="in-group">
                <h3><span class="in-group-1" id="in-group-1">อุปกรณ์หัวเสา</span></h3>
                    <legend>อุปกรณ์หัวเสา 1:</legend>
                        <select name="head_1" id="head_1">
                            <option value="N/A">เลือกอุปกรณ์หัวเสา</option>
                            <?php
                            $sql_head = "SELECT * FROM tbl_price WHERE type = 'h'";
                            $result = mysqli_query($conn,$sql_head);
                            while($objResult = mysqli_fetch_array($result)){
                                echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                           }
                           mysqli_data_seek($result,0);
                        ?>  
                        </select><!--เฟส-->
                    <input type="tel" name="num_head_1" id="num_head_1" value="" placeholder="จำนวน"/>
                    
                    <legend>อุปกรณ์หัวเสา 2:</legend>
                        <select name="head_2" id="head_1">
                            <option value="N/A">เลือกอุปกรณ์หัวเสา</option>
                                <?php
                                $sql_head = "SELECT * FROM tbl_price WHERE type = 'h'";
                                $result = mysqli_query($conn,$sql_head);
                                while($objResult = mysqli_fetch_array($result)){
                                    echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                            }
                            mysqli_data_seek($result,0);
                            ?>  
                        </select><!--เฟส-->
                    <input type="tel" name="num_head_2" id="num_head_2" value="" placeholder="จำนวน"/>
            </div>
        </div>
        <div data-role="collapsible-set" data-content-theme="d" id="set">
            <div data-role="collapsible" id="set1" data-collapsed="true" class="in-group">
                <h3><span class="in-group-1" id="in-group-1">สายไฟฟ้า</span></h3>
                    <legend >สาย 1:</legend>
                    <select name="wire_1" id="wire_1">
                        <option value="N/A">เลือกสาย</option>
                        <?php
                            $sql_wire = "SELECT * FROM tbl_price WHERE type = 'w'";
                            $result = mysqli_query($conn,$sql_wire);
                            while($objResult = mysqli_fetch_array($result)){
                                echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                           }
                           mysqli_data_seek($result,0);
                        ?>  
                    </select><!--เฟส-->
                <input type="tel" name="num_wire_1" id="num_wire_1" value="" placeholder="จำนวน"/>

                <legend >สาย 2:</legend>
                    <select name="wire_2" id="wire_2">
                    <option value="N/A">เลือกสาย</option>
                        <?php
                            $sql_wire = "SELECT * FROM tbl_price WHERE type = 'w'";
                            $result = mysqli_query($conn,$sql_wire);
                            while($objResult = mysqli_fetch_array($result)){
                                echo "<option value='".$objResult["mat_id"]."'>".$objResult["mat_name"]."</option>";
                           }
                           mysqli_data_seek($result,0);
                        ?>
                    </select><!--เฟส-->
                <input type="tel" name="num_wire_2" id="num_wire_2" value="" placeholder="จำนวน"/>
            </div>
        </div>
        <div><input type="submit" value="คำนวณ"></div>
        </form>
    </div>   
</div>

</body>
</html>