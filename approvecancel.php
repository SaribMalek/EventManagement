<?php

$aid=$_GET['id'];

include("connection.php");

$query="UPDATE `EVENT_CREATE` SET `APPROVE`='Not Approaved' WHERE ID='$aid'";

$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Approval Cancel Sucessfull') </script>";
}
else{
	echo "<script> alert('Aproval Not Canceled') </script>";
}

header("Location:requests.php");

?>