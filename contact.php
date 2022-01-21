<!DOCTYPE html>
<html>
<head>
	<title> Contact Us </title>
	<link rel="stylesheet" type="text/css" href="CSS/contact.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

	<div class="content">

		<div class="img" style="background-image: url(images/bg1.jpg); background-repeat: repeat-y; background-size: cover">
			<div class="menu-bar">
				<ul>
				  <li><a class="active" href="home.php">Home</a></li>
				  <li><a href="events.php">Events</a></li>
				  <li><a href="bookevent.php">Book Event</a></li>
				  <li><a href="#pacakages.php">Pacakages</a></li>
				  <li><a href="about.php">About</a></li>
				  <li><a href="contact.php">Contact Us</a></li>
				  <li class="last-child"><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>

		<div class="contact-content">
			<div class="contact-main">

				<h3> Contact Us </h3>
				<span> First Name : </span> <input type="text" name="fname" placeholder="First Name..."> <br><br>
				<span> Last Name : </span> <input type="text" name="lname" placeholder="Last Name..."><br><br>
				<span> Contact No. : </span> <input type="text" name="cno" placeholder="Contact No..."><br><br>
				<span> Email Id : </span> <input type="text" name="email" placeholder="Email Id..."><br><br>
				<span> Subject : </span>
				<textarea placeholder="Write Subject..."></textarea><br> <br>
				
				<div class="btnsubmit">
					<input type="submit" name="send">
				</div>
			</div>
		</div>

		<div class="subscribe-content">
		
			<div class="subscribe">
				<h2> Subscribe Section </h2> 
				<input type="text" placeholder="Enter Your Email">
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