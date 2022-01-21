<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" type="text/css" href="CSS/registration.css">
</head>
<body>
<form method="post">
	
	<div class="content">
		
		<div class="header-content">
			<h2> Registration Form </h2>
		</div>

		<div class="text-content">

			<span> Name : </span> <input type="text" name="name" placeholder="Name...">
			<span> Mobile No. : </span> <input type="text" name="mno" placeholder="Mobile No...">
			
			<span> Email Id : </span> <input type="text" name="id" placeholder="Email Id...">
			<span> Password : </span> <input type="password" name="pass" placeholder="Password...">

			<span> Address : </span> <input type="text" name="add" placeholder="Address...">

			<span> Select Type Of User : </span> 
			<select name="utype" class="select">
				<option value=""> Select Option </option>
				<option value="Organizer"> Organizer </option>
				<option value="Caterer"> Caterer </option>
				<option value="Admin"> Admin </option>
			</select> <br> <br>

			<input type="submit" value="Register" name="check"> 
			<input type="reset">

			<div class="sign-up">
				If Alredy Have Account Than Click <a href="login.php"> Sign-In </a>
			</div>

		</div>

	</div>

</form>
</body>
</html>

<?php

if(isset($_POST['check'])){

	include("connection.php");

	$nm=$_POST['name'];
	$mono=$_POST['mno'];
	$email=$_POST['id'];
	$pass=$_POST['pass'];
	$add=$_POST['add'];
	$uty=$_POST['utype'];
	
	if(!empty($nm) && !empty($mono) && !empty($email) && !empty($pass) && !empty($add) && !empty($add) && !empty($uty)){

		$query="INSERT INTO `REG_MST`(`NAME`, `MONO`, `EMAIL`, `PASS`, `UADD`, `UTYPE`) VALUES ('$nm','$mono','$email','$pass','$add','$uty')";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			echo "<script> alert('Value Inserted Sucessfull') </script>";
		}
		else{
			echo "<script> alert('Value Not Inserted') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}
}

?>