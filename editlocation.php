<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Location Edit </title>
	<link rel="stylesheet" type="text/css" href="CSS/location.css">
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
			          <a href="editlocation.php" class="active">
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
		          <span class="dashboard">Locations</span>
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

						<h2> Edit Location </h2>

						<?php
							$uid=$_GET['id'];
							include("connection.php");

							$query="SELECT * FROM `LOC_MST` WHERE ID='$uid'";
							$res=mysqli_query($con, $query);

							while($row=mysqli_fetch_assoc($res)){
								$id=$row['ID'];
								$lnm=$row['LNAME'];
								$lad=$row['LADD'];
								$mnm=$row['MNAME'];
								$mno=$row['MMNO'];
								$email=$row['MEMAIL'];
								$cap=$row['MAXCAP'];
								$ltyp=$row['LTYPE'];
								$seat=$row['SEATAV'];
							}

						?>

						<form method="post" enctype="multipart/form-data">

							<div class="content">
								<span> Location Name : </span> <input type="text" name="lname" placeholder="Event Location Name..." value="<?php echo $lnm; ?>">
								<span> Location Address : </span> <input type="text" name="ladd" placeholder="Event Location Address..." value="<?php echo $lad; ?>">
								<span> Manager Name : </span> <input type="text" name="mname" placeholder="Event Creator Magr Name..." value="<?php echo $mnm; ?>">
								<span> Manager Mobile No. : </span> <input type="text" name="mmno" placeholder="Event Creator Manager Mobile No..." value="<?php echo $mno; ?>">
								<span> Manager Email : </span> <input type="text" name="memail" placeholder="Event Creator Email Id..." value="<?php echo $email; ?>">
								<span> Maximum Capasity : </span> <input type="text" name="mcap" placeholder="Maximum Capasity..." value="<?php echo $cap; ?>">
								<span> Location Type : </span>
								<select name="ltype" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Indore" <?php if($ltyp=="Indore"){?> selected <?php }?>> Indore </option>
									<option value="Outdore" <?php if($ltyp=="Outdore"){?> selected <?php }?>> Outdore </option>
									<option value="Both" <?php if($ltyp=="Both"){?> selected <?php }?>> Both </option>
								</select>
								<span> Seating Available : </span>
								<select name="seat" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="Sofa" <?php if($seat=="Sofa"){?> selected <?php }?>> Sofa </option>
									<option value="Chairs" <?php if($seat=="Chairs"){?> selected <?php }?>> Chairs </option>
									<option value="Both" <?php if($seat=="Both"){?> selected <?php }?>> Both </option>
								</select>
								<div class="btnclass">
									<input type="submit" name="check" value="Edit Location"> 
								</div>
							</div>

						</form>
						
				  </div>
				</div>
			  </div>
			</div>
		</section>
</body>
</html>

<?php

if(isset($_POST['check'])){

	$lnm=$_POST['lname'];
	$ladd=$_POST['ladd'];
	$mnm=$_POST['mname'];
	$mno=$_POST['mmno'];
	$mem=$_POST['memail'];
	$maxcap=$_POST['mcap'];
	$lty=$_POST['ltype'];
	$set=$_POST['seat'];

	// echo "<script> alert('$lnm $ladd $mnm $mno $mem $maxcap $lty $set') </script>";
	if(!empty($lnm) && !empty($ladd) && !empty($mnm) && !empty($mem) && !empty($maxcap) && !empty($lty) && !empty($set)){
		include("connection.php");

		$query="UPDATE `LOC_MST` SET `LNAME`='$lnm',`LADD`='$ladd',`MNAME`='$mnm',`MMNO`='$mno',`MEMAIL`='$mem',`MAXCAP`='$maxcap',`LTYPE`='$lty',`SEATAV`='$set' WHERE ID='$uid'";
		$res=mysqli_query($con, $query);

		if($res==TRUE){
			echo "<script> alert('Data Updated Sucessfully') </script>";
			header("Location:locationedit.php");
		}
		else{
			echo "<script> alert('Data Not Updated') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}

}

?>