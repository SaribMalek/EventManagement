<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit Task </title>
	<link rel="stylesheet" type="text/css" href="CSS/tasks.css">
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
			          <a href="taskseditremove.php" class="active">
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
		          <span class="dashboard">Edit Task</span>
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

						<h2> Edit Tasks </h2>

						<?php
							$uid=$_GET['id'];
							include("connection.php");

							$query="SELECT * FROM TASK WHERE ID='$uid'";
							$res=mysqli_query($con, $query);
							while ($row=mysqli_fetch_assoc($res)) {
								$tnm=$row['TNAME'];
								$ttyp=$row['TTYPE'];
								$enm=$row['ENAME'];
								$empnm=$row['EMPNAME'];
								$emno=$row['EMPMONO'];
								$eema=$row['EMPEMAIL'];
							}

						?>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								<span> Task Name : </span> <input type="text" name="tname" placeholder="Task Name..." value="<?php echo $tnm; ?>">
								<span> Task Type : </span> <input type="text" name="ttype" placeholder="Task Type..." value="<?php echo $ttyp; ?>">
								<span> Event Name : </span> <input type="text" name="ename" placeholder="Event Name..." value="<?php echo $enm; ?>">
								<span> Employee Name : </span> <input type="text" name="empname" placeholder="Caterer Name..." value="<?php echo $empnm; ?>">
								<span> Employee Mobile No : </span> <input type="text" name="emono" placeholder="Caterer Mobile No..." value="<?php echo $emno; ?>">
								<span> Employee Email : </span> <input type="text" name="eemail" placeholder="Caterer Email..." value="<?php echo $eema; ?>">
								<div class="btnclass">
								<input type="submit" name="check" value="Update Task"> 
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
	$tnam=$_POST['tname'];
	$ttyp=$_POST['ttype'];
	$enam=$_POST['ename'];
	$empnam=$_POST['empname'];
	$emno=$_POST['emono'];
	$eema=$_POST['eemail'];

	if(!empty($tnam) && !empty($ttyp) && !empty($enam) && !empty($empnam) && !empty($emno) && !empty($eema)){

		include("connection.php");
		$query="UPDATE `TASK` SET `TNAME`='$tnam',`TTYPE`='$ttyp',`ENAME`='$enam',`EMPNAME`='$empnam',`EMPMONO`='$emno',`EMPEMAIL`='$eema' WHERE ID='$uid'";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			echo "<script> alert('Value Updated Sucessfull') </script>";
		}
		else{
			echo "<script> alert('Value Not Updated') </script>";
		}
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}
	header("Location:taskseditremove.php");
}

?>