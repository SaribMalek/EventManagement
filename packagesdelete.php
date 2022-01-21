<?php

$did=$_GET['id'];
$img=$_GET['image'];

include("connection.php");

$query="DELETE FROM PACKAGE_MST WHERE ID='$did'";
$res=mysqli_query($con, $query);

if($res==TRUE){
	unlink($img);
	echo "<script> alert('Value Deleted Sucessfull') </script>";
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

header("Location:packageseditremove.php");

?>