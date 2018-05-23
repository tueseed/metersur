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
        require('./connect-db.php');
        session_start();
        echo "ชื่อลูกค้า ".$_SESSION["cs_name"]."<br>";
        echo "เลขที่คำร้อง ".$_SESSION["req_num"]."<br>";
        echo "ที่อยู่ ".$_SESSION["addr"]."<br>";
        echo "เบอร์โทรติดต่อ ".$_SESSION["cs_tel"]."<br><br>";
        //////////////////pole_1
        ////////////////////////////////////////////pole_2
        //$data = array(
          //            ($_POST["pole_1"],$_POST["num_pole_1"]),//0
            //          ($_POST["pole_2"],$_POST["num_pole_2"]),//1
              //        ($_POST["pole_3"],$_POST["num_pole_3"]),//2
                //      ($_POST["head_1"],$_POST["num_head_1"]),//3
                  //    ($_POST["head_2"],$_POST["num_head_2"]),//4
                    //  ($_POST["wire_1"],$_POST["num_wire_1"]),//5
                      //($_POST["wire_2"],$_POST["num_wire_2"])//6
                      //);
        ?>
        <table align="center" data-role="table" id="temp-table" data-mode="reflow" class="ui-responsive table-stroke">
        <thead>
            <tr>
                <th>รายการ</th>
                <th>จำนวน</th>
                <th>ราคา/หน่วย</th>
                <th>เป็นเงิน</th>
            </tr>
        </thead>
        <tbody align="center">
            <tr>
                <?php
                $j=0 ;
                for_each($data as $data1){
                    
                    $sql_pole_1 = "SELECT * FROM tbl_price WHERE mat_id =".$data1[$j][0];
                    $pole_1_query = mysqli_query($conn,$sql_pole_1);
                    $objResult = mysqli_fetch_array($pole_1_query);
                    $price = $objResult["pri"];
                    $num_pole_1 = $data1[$j][1];
                    $total = $price*$num_pole_1;
                    echo "<td>".$objResult["mat_name"]."</td>";
                    echo "<td>".$num_pole_1."</td>";
                    echo "<td>".$price."</td>";
                    echo "<td>".$total."</td>";
                    $j=$j+1;
                }
                ?>

            </tr>
        </tbody
        </table>
    </div> 
      
</div>

</body>
</html>