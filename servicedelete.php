<?php

$did=$_GET['id'];

include("connection.php");

$query="DELETE FROM SERVICE_MST WHERE ID='$did'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Value Deleted Sucessfull') </script>";
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

header("Location:serviceaddremove.php");

?>
