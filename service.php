<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Services </title>
	<link rel="stylesheet" type="text/css" href="CSS/service.css">
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
			        <a href="createevent.php">
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
			          <a href="service.php" class="active">
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
			          <a href="guestedit.php">
			          	<i></i>
			            <span class="links_name"> Guest Edit </span>
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
			            <span class="links_name"> Edit/Remove Cost </span>
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
		          <span class="dashboard">Services</span>
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
			<!-- </div> -->

			<div class="home-content">
		      <div class="overview-boxes">
		        <div class="sales-boxes">
		          <div class="recent-sales">

						<h2> Services in Event </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								<span> Event Name : </span>
								<select name="enam" style="background-color: white;">
									<option value=""> Select Option </option>
									<?php

										include("connection.php");
										$query="SELECT ENAME FROM EVENT_CREATE";
										$res=mysqli_query($con, $query);
										while ($row=mysqli_fetch_assoc($res)) {
										?>

											<option value="<?php echo $row['ENAME']; ?>"> <?php echo $row['ENAME']; ?> </option>

										<?php
										}

									?>

								</select>
								<span> Decoration Service : </span>
								<select name="decser" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Stage"> Stage </option>
									<option value="Hall"> Hall </option>
									<option value="Stage and Hall"> Stage and Hall </option>
								</select>
								<span> Food Type : </span>
								<select name="ftype" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Dinner"> Dinner </option>
									<option value="Breakfast"> Breakfast </option>
									<option value="Lunch"> Lunch </option>
									<option value="Dinner Breakfast And Lunch"> Dinner Breakfast And Lunch </option>
								</select>
								<span> Food Service : </span>
								<select name="fser" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Veg Food"> Veg Food </option>
									<option value="Nonveg Food"> Nonveg Food </option>
									<option value="Veg and Nonveg"> Veg and Nonveg </option>
								</select>
								<span> Seting Service : </span>
								<select name="setser" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Table and Chair"> Table and Chair </option>
									<option value="Table and Sofa"> Table and Sofa </option>
									<option value="Table Chair and Sofa"> Table Chair and Sofa </option>
								</select>


								<div class="btnclass">
								<input type="submit" name="check" value="Add Service"> 
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
	$ename=$_POST['enam'];
	$deser=$_POST['decser'];
	$fty=$_POST['ftype'];
	$foser=$_POST['fser'];
	$sser=$_POST['setser'];

	if(!empty($ename) && !empty($deser) && !empty($fty) && !empty($foser) && !empty($sser)){
		include("connection.php");
		$query="INSERT INTO `SERVICE_MST`(`ENAME`, `DEC_SER`, `FOOD_TYPE`, `FOOD_SER`, `SETTING_SER`) VALUES ('$ename','$deser','$fty','$foser','$sser')";
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