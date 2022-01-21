<!DOCTYPE html>
<html>
<head>
	<title> Events Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/events.css">
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
				  <li><a href="packages.php">Pacakages</a></li>
				  <li><a href="about.php">About</a></li>
				  <li><a href="contact.php">Contact Us</a></li>
				  <li class="last-child"><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>

		<?php

			include("connection.php");
					$query="SELECT * FROM `EVENT_CREATE` WHERE APPROVE='Approaved'";
					$res=mysqli_query($con, $query);
					if(mysqli_num_rows($res)>0){

		?>
			<div class="event-main-content">
			<div class="event-content">
				<div class="event-row">
					<?php 

						
						while($row=mysqli_fetch_assoc($res)){
							$img=".".$row['IMAGE'];
					?>
						
						<div class="event-col">
							<h3> <?php echo $row['ENAME']; ?> </h3>
							<img src="<?php echo $img; ?>">
							<p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you’re a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required. </p>
							<a href="bookevent.php"><input type="submit" value="Book Event"></a>
						</div>
						
					<?php
						}
					
					?>
				</div>
			</div>
		</div>
	<?php } ?>

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