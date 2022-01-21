<?php

$did=$_GET['id'];
$image=$_GET['img'];
include("connection.php");

$query="DELETE FROM IMAGE_ADD WHERE ID='$did'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	unlink($image);
	echo "<script> alert('Value Deleted Sucessfull') </script>";
	header("Location:imageaddremove.php");
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

?>