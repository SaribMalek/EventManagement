<?php

$aid=$_GET['id'];

include("connection.php");

$query="UPDATE `EVENT_CREATE` SET `APPROVE`='Approaved' WHERE ID='$aid'";
$res=mysqli_query($con, $query);
if($res==TRUE){
	echo "<script> alert('Approaved Sucessfull') </script>";
}
else{
	echo "<script> alert('Not Approaved') </script>";
}

header("Location:requests.php");

?>