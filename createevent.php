<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Create Event </title>
	<link rel="stylesheet" type="text/css" href="CSS/createevent.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

		<div class="sidebar">
		    <div class="logo-details">
		      <i></i>
		      <span class="logo_name">Admin Panel</span>
		    </div>
		      <ul class="nav-links">
		        <li>
		          <a href="admindashboard.php">
		          	<i></i>
		            <span class="links_name">Dashboard</span>
		          </a>
		        </li>
		        <li>
			        <a href="createevent.php"  class="active">
			        <i></i>
			            <span class="links_name"> Create Event </span>
			          </a>
			        </li>

			         <li>
			          <a href="editevent.php">
			          	<i></i>
			            <span class="links_name"> View Event </span>
			          </a>
			        </li>

			        <li>
			          <a href="service.php">
			          	<i></i>
			            <span class="links_name"> Service </span>
			          </a>
			        </li>

			        <li>
			          <a href="location.php">
			          	<i></i>
			            <span class="links_name"> Location </span>
			          </a>
			        </li>

			        <li>
			          <a href="editlocation.php">
			          	<i></i>
			            <span class="links_name"> Edit Location </span>
			          </a>
			        </li>

			        <li>
			          <a href="guestsadd.php">
			          	<i></i>
			            <span class="links_name"> Guests </span>
			          </a>
			        </li>

			        <li>
			          <a href="cost.php">
			          	<i></i>
			            <span class="links_name"> Cost Event </span>
			          </a>
			        </li>

			        <li>
			          <a href="costaddremove.php">
			          	<i></i>
			            <span class="links_name"> Cost Add / Remove </span>
			          </a>
			        </li>

			        <li>
			          <a href="imageaddremove.php">
			          	<i></i>
			            <span class="links_name"> Add/Remove Images </span>
			          </a>
			        </li>

			        <li>
			          <a href="tableaddremove.php">
			          	<i></i>
			            <span class="links_name"> Add Tables </span>
			          </a>
			        </li>

			        <li>
			          <a href="tableeditremove.php">
			          	<i></i>
			            <span class="links_name"> Edit/Remove Tables </span>
			          </a>
			        </li>

			          <li>
			          <a href="tasks.php">
			          	<i></i>
			            <span class="links_name"> Add Tasks </span>
			          </a>
			        </li>

			        <li>
			          <a href="taskseditremove.php">
			          	<i></i>
			            <span class="links_name"> Edit/Remove Tasks </span>
			          </a>
			        </li>

			        <li>
			          <a href="updateprofile.php">
			          	<i></i>
			            <span class="links_name"> Edit Profile </span>
			          </a>
			        </li>

			        <li>
			          <a href="servicesearch.php">
			          	<i></i>
			            <span class="links_name"> Search Services </span>
			          </a>
			        </li>

			        <li>
			          <a href="serviceaddremove.php">
			          	<i></i>
			            <span class="links_name"> Add/Remove Services </span>
			          </a>
			        </li>
			    
		        <li class="log_out">
		          <a href="logout.php">
		          	<i></i>
		            <span class="links_name">Log out</span>
		          </a>
		        </li>
		      </ul>
		  </div>

		<section class="home-section">
		      <nav>
		        <div class="sidebar-button">
		          <span class="dashboard">Create Event</span>
		        </div>
		        <div class="search-box">
		          <input type="text" placeholder="Search...">
		          <i class='bx bx-search' ></i>
		        </div>
		        <!-- <div class="profile-details">
		          <img src="img.jpg" alt="">
		          <span class="admin_name">ABC </span>
		          <i class='bx bx-chevron-down' ></i>
		        </div> -->
		      </nav>
			</div>

			<div class="home-content">
		      <div class="overview-boxes">
		        <div class="sales-boxes">
		          <div class="recent-sales">

						<h2> Create Event </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								<span> Event Cretor Name : </span> <input type="text" name="cname" placeholder="Event Creator Name...">
								<span> Event Cretor Mobile No. : </span> <input type="text" name="mono" placeholder="Event Creator Mobile No...">
								<span> Event Cretor Email : </span> <input type="text" name="email" placeholder="Event Creator Email Id...">
								<span> Event Cretor Address : </span> <input type="text" name="add" placeholder="Event Creator Address...">
								<span> Event Name : </span> <input type="text" name="name" placeholder="Event Name...">
								<span> Event Location : </span> <input type="text" name="loc" placeholder="Event Location...">
								<span> Select Image : </span> <input type="file" name="image">
								<span> Event date : </span> <input type="date" name="dt">
								<span> Event Time : </span> <input type="time" name="stime">
								<span> Event Venue : </span>
								<select name="evenue" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Marriage"> Marriage </option>
									<option value="Engadgement"> Engadgement </option>
									<option value="Anniversary"> Anniversary </option>
									<option value="Birthday Party"> Birthday Party </option>
									<option value="Christmas"> Christmas </option>
									<option value="31st Celebration"> 31st Celebration </option>
								</select>
								<div class="btnclass">
								<input type="submit" name="check" value="Add Event"> 
								<!-- <input type="submit" value="Show Payment form" id="paybtn"> -->
								</div>

								
							</div>

						</form>

				   </div>
				</div>
			  </div>
			</div>
		</section>

<!-- <script type="text/javascript">
	
// $(document).ready(function(){
// 	$("#click").click(function(){
// 		$("#form1").toggle();
// 	});
// });

</script> -->

</body>
</html>

<?php

if(isset($_POST['check'])){

	$cnm=$_POST['cname'];
	$mno=$_POST['mono'];
	$email=$_POST['email'];
	$add=$_POST['add'];
	$nm=$_POST['name'];
 	$loc=$_POST['loc'];
	$date=$_POST['dt'];
	$stim=$_POST['stime'];
	$ven=$_POST['evenue'];
	$img=$_FILES['image']['name'];
	$tmp=$_FILES['image']['tmp_name'];
	$dir="/uploads/".$img;
	move_uploaded_file($tmp, __DIR__.$dir);


	if(!empty($cnm) && !empty($mno) && !empty($email) && !empty($add) && !empty($nm) && !empty($loc) && !empty($date) && !empty($stim) && !empty($ven)){

		include("connection.php");

		$query="INSERT INTO `EVENT_CREATE`(`CNAME`, `MONO`, `EMAIL`, `CADD`, `ENAME`, `ELOC`, `IMAGE`, `EDATE`, `ETIME`, `EVENUE`, `APPROVE`) VALUES ('$cnm','$mno','$email','$add','$nm','$loc','$dir','$date','$stim','$ven','Not Approaved')";

		$res=mysqli_query($con, $query) or die("<script> alert('ERROR') </script>");
		if($res==TRUE){
			echo "<script> alert('Data Inserted Sucessfully') </script>";
		}
		else{
			echo "<script> alert('Data Not Inserted') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}
}

?>