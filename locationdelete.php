<?php

include("connection.php");
$did=$_GET['id'];

$query="DELETE FROM LOC_MST WHERE ID='$did'";

$res=mysqli_query($con, $query);

if($res==TRUE){
	echo "<script> alert('Row Deleted Sucessfull') </script>";
	header("Location:locationedit.php");
}
else{
	echo "<script> alert('Data Not Deleted') </script>";
}

?>