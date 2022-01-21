<!DOCTYPE html>
<html>
<head>
	<title> Book Events</title>
	<link rel="stylesheet" type="text/css" href="CSS/bookevent.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

	<div class="content">

		<div class="img" style="background-image: url(images/bg1.jpg);  background-repeat: repeat-y; background-size: cover">
			<div class="menu-bar">
				<ul>
				  <li><a class="active" href="home.php">Home</a></li>
				  <li><a href="events.php">Events</a></li>
				  <li><a href="bookevent.php">Book Event</a></li>
				  <li><a href="packages.php">Pacakages</a></li>
				  <li><a href="about.php">About</a></li>
				  <li><a href="contact.php">Contact Us</a></li>
				  <li class="last-child"><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>

		<div class="book-content">
			<div class="event-book">
				<h3> Book Event </h3>
				<form method="post">
					
					<span> Name : </span> <input type="text" name="nm" placeholder="Full Name...">
					<span> Mobile No. : </span> <input type="text" name="mno" placeholder="Mobile No...">
					<span> Email Id : </span> <input type="text" name="email" placeholder="Email Id...">
					<span> Total Member : </span> <input type="text" name="tmem" placeholder="Total Members...">
					<span> Event Name : </span> <input type="text" name="enm" placeholder="Event Name...">
					<span> Date Of Event : </span> <input type="date" name="edate" placeholder="Event Date...">
					<div class="btn_book">
						<input type="submit" value="Book Event" name="book">
					</div>

				</form>

			</div>
		</div>
		

		<div class="subscribe-content">
		
			<div class="subscribe">
				<h2> Subscribe Section </h2> 
				<input type="text" placeholder="Your Email Id...">
				<input type="submit" value="Subscribe">
			</div>
		</div>

		<footer>
			<div class="fot-content">
				<h3> Pages </h3>
				<ul>
					<li> <a href="home.php"> Home </a> </li>
					<li> <a href="events.php"> Event </a> </li>
					<li> <a href="bookevent.php"> Book Event </a> </li>
					<li> <a href="#about"> About </a> </li>	
					<li> <a href="#contact"> Contact </a> </li>
				</ul>
			</div>

			<div class="fot-content-right">
				<h3> Links </h3>
				<ul>
					<li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
					<li> <a href="#"> <i class="fab fa-facebook"></i> </a> </li>
					<li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>	
					<li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
				</ul>
			</div>
		</footer>
	</div>

</body>
</html>

<?php

if(isset($_POST['book'])){
	$name=$_POST['nm'];
	$mono=$_POST['mno'];
	$ema=$_POST['email'];
	$totm=$_POST['tmem'];
	$ename=$_POST['enm'];
	$edate=$_POST['edate'];

	if(!empty($name) && !empty($mono) && !empty($ema) && !empty($totm) && !empty($ename) && !empty($edate)){

		include("connection.php");
		$query="INSERT INTO `BOOK_EVENT`(`UNAME`, `UMONO`, `UEMAIL`, `TOT_MEM`, `ENAME`, `EDATE`) VALUES ('$name','$mono','$ema','$totm','$ename','$edate')";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			echo "<script> alert('Organizer Will Contact You Soon') </script>";
		}
		else{
			echo "<script> alert('Value Not Stored') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}
}

?>