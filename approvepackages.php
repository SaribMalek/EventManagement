<?php

$aid=$_GET['id'];

include("connection.php");
$query="UPDATE `PACKAGE_MST` SET `APPROVE`='Approaved' WHERE ID='$aid'";

$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Approaved Sucessfully') </script>";
}
else{
	echo "<script> alert('Not Approaved') </script>";
}

header("Location:packagesapprove.php");

?>