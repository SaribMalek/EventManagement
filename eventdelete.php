<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipart/form-data">

<?php

include("connection.php");

$did=$_GET['id'];
$img=$_GET['image'];

// echo $did."<br>".$img;

$query="DELETE FROM `EVENT_CREATE` WHERE ID='$did'";

$res=mysqli_query($con, $query);

if($res==TRUE){
	unlink($img);
	echo "<script> alert('Deleted Sucessfull') </script>";
	header("location:editevent.php");
}
else{
	echo "<script> alert('Value Not Deleted') </script>";
}

?>

</body>
</html>