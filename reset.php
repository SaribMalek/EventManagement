<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Reset Password </title>
	<link rel="stylesheet" type="text/css" href="CSS/reset.css">
</head>
<body>
<form method="post">
	
	<div class="content">
		
		<div class="header">
			<h2> Create New Password </h2>
		</div>

		<div class="pass-reset">
			
			<span> Email Id : </span> <input type="text" name="email" value="<?php echo $_SESSION['userid']; ?>" readonly>
			<span> New Password : </span> <input type="password" name="pass" placeholder="New Password...">
			<span> Confirm Password : </span> <input type="password" name="rpass" placeholder="Confirm Password...">

			<input type="submit" value="Reset Password" name="check">

		</div>

	</div>

</form>
</body>
</html>

<?php

if(isset($_POST['check'])){
	$id=$_SESSION['userid'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];

	if($pass==$rpass){
		include("connection.php");

		$query="UPDATE REG_MST SET PASS='$pass' WHERE EMAIL='$id'";

		$res=mysqli_query($con, $query);

		if($res==TRUE){
			echo "<script> alert('Password Updated Sucessfully') </script>";
		}
		else{
			echo "<script> alert('Password Not Updated') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Both Passsword Is Same Password') </script>";
	}
}

?>