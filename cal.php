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
        <h5>การไฟฟ้าส่วนภูมิภาค</h5>
        <h5>สาขาอำเภอปากท่อ</h5>
    </div>
    <div data-role="content"> 
        <?php
        require('./connect-db.php');
        session_start();
        echo "ชื่อลูกค้า ".$_SESSION["cs_name"]."<br>";
        echo "เลขที่คำร้อง ".$_SESSION["req_num"]."<br>";
        echo "ที่อยู่ ".$_SESSION["addr"]."<br>";
        echo "เบอร์โทรติดต่อ ".$_SESSION["cs_tel"]."<br><br>";
        //////////////////pole_1
        ////////////////////////////////////////////pole_2
        $pole_1 = $_POST["pole_1"];
        $pole_2 = $_POST["pole_2"];
        $pole_3 = $_POST["pole_3"];
        $num_pole_1 = $_POST["num_pole_1"];
        $num_pole_2 = $_POST["num_pole_2"];
        $num_pole_3 = $_POST["num_pole_3"];
        $head_1 = $_POST["head_1"];
        $head_2 = $_POST["head_2"];
        $num_head_1 = $_POST["num_head_1"];
        $num_head_2 = $_POST["num_head_2"];
        $wire_1 = $_POST["wire_1"];
        $wire_2 = $_POST["wire_2"];
        $num_wire_1 = $_POST["num_wire_1"];
        $num_wire_2 = $_POST["num_wire_2"];
        $data = array(
                      array($pole_1,$num_pole_1),
                      array($pole_2,$num_pole_2),
                      array($pole_3,$num_pole_3),
                      array($head_1,$num_head_1),
                      array($head_2,$num_head_2),
                      array($wire_1,$num_wire_1),
                      array($wire_2,$num_wire_2)
                      );
        echo "<br>";
       

        ?>
        <table data-role="table" id="my-table" data-mode="reflow">
            <thead>
                <tr>
                    <th>รายการ</th>
                    <th>จำนวน</th>
                    <th>ราคา/หน่วย</th>
                    <th>เป็นเงิน</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for($j=0;$j<=6;$j++){
                    if($data[$j][0] <> "N/A"){
                        $sql = "SELECT * FROM tbl_price WHERE mat_id =".$data[$j][0];
                        $result = mysqli_query($conn,$sql);
                        $objresult = mysqli_fetch_array($result);
                        $total = $data[$j][1]*$objresult["pri"];
                        echo "<tr>";
                        echo "<td>".$objresult["mat_name"]."</td>";
                        echo "<td>".$data[$j][1]."</td>";
                        echo "<td>".$objresult["pri"]."</td>";
                        echo "<td>".number_format($total,2)."</td>";
                        echo "</tr>";
                        $t_all =$t_all+$total;
                    }
                    
                }
                ?>
            </tbody>
        </table>
        <?php  echo "รวมเป็นเงินทั้งสิ้นประมาณ ".number_format($t_all,2)." บาท";   ?>
    </div> 
    <div data-role="content">
        <h5>ราคานี้เป็นราคาประมาณการเท่านั้น</h5>
        <h5>เจ้าหน้าที่จะแจ้งราคาที่แน่นอนอีกครั้ง</h5>
        <h5>โทร 032-2222222</h5>
    </div>  
</div>

</body>
</html>