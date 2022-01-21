<!DOCTYPE html>
<html>
<head>
	<title> Demo File </title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	
	<center>

		<?php

			include("connection.php");
			$query="SELECT IMG_LOC FROM `IMAGE_ADD` WHERE ID='1'";
			$res=mysqli_query($con, $query);
			$row=mysqli_fetch_assoc($res);
			$img=$row['IMG_LOC'];
			echo "<script> alert('$img') </script>";
		?>
		Select File : <input type="file" name="image" value="<?php echo $img; ?>"> <br> <br>
		<input type="submit" value="upload" name="check">
	</center>
 
</form>
</body>
</html>

<?php

if(isset($_POST['check'])){

	$img=$_FILES['image']['name'];
	$tmp=$_FILES['image']['tmp_name'];
	echo $img."<br>";
	$dir="/uploads/".$img;
	echo $dir;
	if(move_uploaded_file($tmp, __DIR__.$dir)){
		echo "<script> alert('Image Uploaded Sucessfull') </script>";
	}
	else{
		echo "<script> alert('Image Not Uploaded') </script>";
	}
}

?>