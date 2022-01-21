<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Update Profile </title>
	<link rel="stylesheet" type="text/css" href="CSS/updateprofile.css">
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
			          <a href="updateprofile.php" class="active">
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
		          <span class="dashboard">Update Profile</span>
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

						<h2> Profile Update </h2>

						<?php

							include("connection.php");
							$id=$_SESSION['userid'];
							$query="SELECT * FROM REG_MST WHERE EMAIL='$id'";

							$res=mysqli_query($con, $query);
							while ($row=mysqli_fetch_assoc($res)) {
								$uid=$row['ID'];
								$nm=$row['NAME'];
								$mno=$row['MONO'];
								$ema=$row['EMAIL'];
								$add=$row['UADD'];
								$uty=$row['UTYPE'];
							}

						?>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								<span> Name : </span> <input type="text" name="name" placeholder="Name..." value="<?php echo $nm; ?>">
								<span> Mobile No. : </span> <input type="text" name="mono" placeholder="Mobile No..." value="<?php echo $mno; ?>">
								<span> Email : </span> <input type="text" name="email" placeholder="Email Id..." value="<?php echo $ema; ?>">
								<span> Address : </span> <input type="text" name="add" placeholder="Address..." value="<?php echo $add; ?>">
								<span> User Type: </span>
								<select name="utype" style="background-color: white;">
									<option value="Organizer" <?php if($uty!="Organizer"){ ?> disabled <?php }?>> Organizer </option>
									<option value="Caterer" <?php if($uty!="Caterer"){ ?> disabled <?php }?>> Caterer </option>
									<option value="Admin" <?php if($uty!="Admin"){ ?> disabled <?php }?>> Admin </option>
								</select>
								<div class="btnclass">
								<input type="submit" name="check" value="Update Profile"> 
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
	$nam=$_POST['name'];
	$mono=$_POST['mono'];
	$em=$_POST['email'];
	$add=$_POST['add'];
	$utyp=$_POST['utype'];

	// echo "<script> alert('$uid') </script>";

	if(!empty($nam) && !empty($mono) && !empty($em) && !empty($add) && !empty($utyp)){
		
		include("connection.php");

		$query="UPDATE `REG_MST` SET `NAME`='$nam',`MONO`='$mono',`EMAIL`='$em',`UADD`='$add',`UTYPE`='$utyp' WHERE ID='$uid'";

		$res=mysqli_query($con, $query);

		if($res==TRUE){
			echo "<script> alert('Value Updated Sucessfully') </script>";
		}
		else{
			echo "<script> alert('Value Not Updated') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}
}

?>