<?php

$did=$_GET['id'];
echo $did;

include("connection.php");
$query="DELETE FROM `PACKAGE_CATEGORY` WHERE ID='$did'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Value Deleted Sucessfully') </script>";
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

header("Location:packagecategoryeditremove.php");

?>