<?php

$did=$_GET['id'];

include("connection.php");

$query="DELETE FROM `GUEST_MST` WHERE ID='$did'";

$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Value Deleted Sucessfull') </script>";
	header("Location:guestedit.php");
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

?>