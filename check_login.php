<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Surwayer Web App</title>

</head> 
<body> 
<?php
	require('./connect-db.php');
	session_start();
	$U = $_POST['textuser'];
	$P = $_POST['textpass'];

		$sql = "SELECT * FROM tbl_staff WHERE user = '".$U."' and pass = '".$P."'";
		$result = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($result);
		if(!$objResult)
				{
			echo "ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง หรือไม่ได้ลงทะเบียน " ;
			echo '<br>กลับสู่หน้า  <a href = "index.php"> เข้าสู่ระบบ </a>';
				}
		else
				{
				$_SESSION["NAME"] = $objResult["name"];
				session_write_close();
				header("location:main.html");
				}
	echo $U;
	?>
	

</body>
</html>
