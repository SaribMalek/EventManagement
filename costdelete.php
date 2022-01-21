<?php

$did=$_GET['id'];

include("connection.php");

$query="DELETE FROM TOTAL_COST WHERE ID='$did'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Value Deleted Sucessfully') </script>";
	header("Location:costaddremove.php");
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

?>