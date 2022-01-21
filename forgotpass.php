<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Forgot Password </title>
	<link rel="stylesheet" type="text/css" href="CSS/forgotpass.css">
</head>
<body>
<form method="post">
	
	<div class="content">
		
		<div class="header">
			<h2> Forgot Password </h2>
		</div>

		<div class="forgot-content">
			
			<span> Email Id : </span> <input type="text" name="email" placeholder="Email Id...">

			<input type="submit" value="Send Message" name="sendmsg">

		</div>

	</div>

</form>
</body>
</html>

<?php
	
	if(isset($_POST['sendmsg'])){
		$eid=$_POST['email'];
		include("connection.php");

		$query="SELECT * FROM `REG_MST` WHERE EMAIL='$eid'";
		$res=mysqli_query($con, $query);
		
		while ($row=mysqli_fetch_assoc($res)){
			if($row['UTYPE']=="Admin"){
				echo "<script> alert('Admin Can not Forgot Password') </script>";
			}
			elseif($eid==$row['EMAIL']){
				
				$_SESSION['userid']=$row['EMAIL'];

				$email=$row['EMAIL'];
				$id=$row['ID'];
				$token=rand();                        //uniqid(md5(time()));
				$query=mysqli_query($con, "INSERT INTO `PASSWORD_RESET`(`EMAIL`, `TOKEN`) VALUES ('$email','$token')") or die("ERROR");
				
				if($query==TRUE){
					// echo "<script> alert('send message block'); </script>";
					include('smtp/PHPMailerAutoload.php');

					$mail = new PHPMailer();
					$mail->SMTPDebug  = 3;
					$mail->isSMTP();
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = 'tls';
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->isHTML(true);
					$mail->CharSet = 'UTF-8';
					$mail->Username = "saribmalek111@gmail.com";
					$mail->Password = "Malek@2001";
					$mail->SetFrom("saribmalek111@gmail.com");
					$mail->Subject = "Forgot Password Link";
					$mail->Body = '<h2> Hello '.$email.' </h2> <h3> Subject : To Forgot Password  </h3> Link For Forgot Password click <h2> <a href="localhost/eventmanagement/reset.php?token='.$token.'"> HERE </a> </h2> <br> Thank you. ';
					$mail->AddAddress($email, $email);
					$mail->SMTPOptions=array('ssl'=>array(
							'verify_peer'=>false,
							'verify_peer_name'=>false,
							'allow_self_signed'=>false
						));

					if(!$mail->Send()){
						echo "<script> alert('message not send') </script>";
					}
					else{
						echo "<script> alert('Message Send Sucessfully') </script>";
					}
					
				}
			}
			elseif($eid!=$row['EMAIL']){
				echo "<script> alert('Email Id Does Not Exist'); </script>";
			}
			else{
				echo "<script> alert('Please Input Valid Email Id'); </script>";
			}
		}
	}

?>