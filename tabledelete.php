<?php

$did=$_GET['id'];

include("connection.php");

$query="DELETE FROM TABLE_MST WHERE ID='$did'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Value Deleted Sucessfully') </script>";
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

header("Location:tableeditremove.php");
?>