<?php
		require('./connect-db.php');
	
		$sql = "SELECT * FROM tbl_staff";
		
		$query_type = mysqli_query($conn,$sql_type);
		
		while($ofname = mysqli_fetch_array($query)){ 
			$ofname1 = $ofname["office_name"];
		}
	?>
