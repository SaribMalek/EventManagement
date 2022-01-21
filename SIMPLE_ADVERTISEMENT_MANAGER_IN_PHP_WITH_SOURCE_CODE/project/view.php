<?php
	require("include/connect.php");
	
	$query = mysqli_query($con, "SELECT * FROM content");
	while($row = mysqli_fetch_array($query)){
		echo "<div style='width:800px; height:380px; border:1px solid #000; margin-top:20px; margin:50px auto;'>";
		echo 	$row['body'];
		echo "</div>";
	}
?>