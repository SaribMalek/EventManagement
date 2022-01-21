<?php

$aid=$_GET['id'];

include("connection.php");

$query="UPDATE `PACKAGE_MST` SET `APPROVE`='Not Approaved' WHERE ID='$aid'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Cancel Approve Sucessfull') </script>";
}
else{
	echo "<script> alert('Not Cancel Approve') </script>";
}

header("Location:packagesapprove.php");

?>