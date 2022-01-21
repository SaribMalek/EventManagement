<!DOCTYPE html>
<html>
<head>
	<title> Event Management Home </title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

	<div class="content">

		<div class="img" style="background-image: url(images/bg1.jpg);  background-repeat: repeat-y; background-size: cover; width: 100%;">
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


		<div class="booking-content">
		 	<h2> Tickits Of Events </h2>
			<div class="book-ticket">
				<div class="ticket">
					<img src="images/loc1.jpg">
					<p> 31st Celerebation </p>
					<input type="submit" value="Book Ticket"> <span> Price : 100&#8377;</span>
				</div>
				<div class="ticket">
					<img src="images/loc2.jpg">
					<p> Sport Day Celerebation </p>
					<input type="submit" value="Book Ticket"> <span> Price : 100&#8377;</span>
				</div>
				<div class="ticket">
					<img src="images/loc3.jpg">
					<p> Annual Day Celerebation </p>
					<input type="submit" value="Book Ticket"> <span> Price : 100&#8377;</span>
				</div>
			</div>
			<div class="book-ticket">
				<div class="ticket">
					<img src="images/loc4.jpg">
					<p> 31st Celerebation </p>
					<input type="submit" value="Book Ticket"> <span> Price : 100&#8377;</span>
				</div>
				<div class="ticket">
					<img src="images/loc5.jpg">
					<p> Sport Day Celerebation </p>
					<input type="submit" value="Book Ticket"> <span> Price : 100&#8377;</span>
				</div>
				<div class="ticket">
					<img src="images/loc6.jpg">
					<p> Annual Day Celerebation </p>
					<input type="submit" value="Book Ticket"> <span> Price : 100&#8377;</span>
				</div>
			</div>
		</div>

		<div class="event-main-content">
			<div class="event-content">
				<center> <h2> Events </h2> </center>
				<div class="event-row">
					<div class="event-col">
						<h3> 31st Celebration </h3>
						<img src="./uploads/loc1.jpg">
						<p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you’re a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required. </p>
						<a href="bookevent.php"><input type="submit" value="Book Event"></a>
					</div>
					<div class="event-col">
						<h3> Christmas </h3>
						<img src="./uploads/loc2.jpg">
						<p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you’re a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required. </p>
						<a href="bookevent.php"><input type="submit" value="Book Event"></a>
					</div>
					<div class="event-col">
						<h3> Sport Day Celebration </h3>
						<img src="./uploads/loc3.jpg">
						<p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you’re a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required. </p>
						<a href="bookevent.php"><input type="submit" value="Book Event"></a>
					</div>
				</div>
			</div>
		</div>	


		<div class="sponser-content">
			<div class="sponser">
				<div class="sponser-images">
					<h3> Sponsers </h3>
					<img src="images/spo1.png">
					<img src="images/spo2.png">
					<img src="images/spo3.png">
					<img src="images/spo4.png">
				</div>
			</div>
		</div>

		<div class="subscribe-content">
			<form method="post">
			<div class="subscribe">
				<h2> Subscribe Section </h2> 
				<input type="text" name="sub" placeholder="Enter Your Email...">
				<input type="submit" value="Subscribe" name="check">
			</div>
			</form>
		</div>

		<footer>
			<div class="fot-content">
				<h3> Pages </h3>
				<ul>
					<li> <a href="home.php"> Home </a> </li>
					<li> <a href="events.php"> Event </a> </li>
					<li> <a href="bookevent.php"> Book Event </a> </li>
					<li> <a href="about.php"> About </a> </li>	
					<li> <a href="contact.php"> Contact </a> </li>
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

if(isset($_POST['check'])){
	$subid=$_POST['sub'];
	$currentdate=date("Y/m/d H:m:s");
	// echo "<script> alert('$currentdate') </script>";

	if(!empty($subid)){

		include("connection.php");
		$query="INSERT INTO `SUBSCRIBE_MST`(`SEMAIL`, `SDATE`) VALUES ('$subid','$currentdate')";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			echo "<script> alert('Subscribe Sucessfull') </script>";
		}
		else{
			echo "<script> alert('Not Subscribe') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Your Email Id') </script>";
	}
}

?>