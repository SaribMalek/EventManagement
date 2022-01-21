<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?><!DOCTYPE html>
<html>
<head>
	<title> Edit Table </title>
	<link rel="stylesheet" type="text/css" href="CSS/tableadd.css">
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
			          <a href="tableeditremove.php" class="active">
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
		          <span class="dashboard">Add Table</span>
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

						<h2> Add Tables </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								<span> Select Event : </span>
								<select name="enam" style="background-color: white;">
									<option value=""> Select Event Name </option>
								<?php
									$uid=$_GET['id'];
									include("connection.php");
									$query="SELECT * FROM TABLE_MST WHERE ID='$uid'";
									$res=mysqli_query($con, $query);
									while ($row=mysqli_fetch_assoc($res)) {
										$ttable=$row['TOT_TABLE'];
										$chawithtab=$row['CHAIT_TABLE'];
										$tchair=$row['TOT_CHAIR'];
								?>
									<option value="<?php echo $row['ENAME']; ?>" selected> <?php echo $row['ENAME']; ?> </option>
								<?php
									}
								?>
								</select>
								<span> Total No Of Table : </span> <input type="text" name="tottab" id="tottable" placeholder="Total No Of Tables..." value="<?php echo $ttable; ?>">
								<span> Chairs With One Table : </span> <input type="text" name="chtab" id="chairtab" placeholder="Chairs With One Table..." value="<?php echo $chawithtab; ?>">
								<span> Total Chairs : </span> <input type="text" name="tchai" id="totchair" placeholder="Total No Chairs..." value="<?php echo $tchair; ?>">
								
								<div class="btnclass">
								<input type="submit" name="check" value="Update Tables"> 
								<!-- <input type="submit" value="Show Payment form" id="paybtn"> -->
								</div>

							</div>

						</form>

						
				  </div>
				</div>
			  </div>
			</div>
		</section>

<script type="text/javascript">
	
$(document).ready(function(){

	$("#tottable").change(function(){
		var tabtot = parseInt($("#chairtab").val());
		var chtab = parseInt($(this).val());
		$("#totchair").val(tabtot * chtab);
	});

	$("#chairtab").change(function(){
		var tabtot = parseInt($("#tottable").val());
		var chtab = parseInt($(this).val());
		$("#totchair").val(tabtot * chtab);
	});
});

</script>

</body>
</html>

<?php

if(isset($_POST['check'])){
	
	$ename=$_POST['enam'];
	$tottable=$_POST['tottab'];
	$chtable=$_POST['chtab'];
	$totalchair=$_POST['tchai'];

	// echo "<script> alert('$ename $tottable $chtable $totalchair') </script>";

	if(!empty($ename) && !empty($tottable) && !empty($chtable) && !empty($totalchair)){
		include("connection.php");
		$query="UPDATE `TABLE_MST` SET `ENAME`='$ename',`TOT_TABLE`=$tottable,`CHAIT_TABLE`='$chtable',`TOT_CHAIR`='$totalchair' WHERE ID='$uid'";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			echo "<script> alert('Value Updated Sucessfull') </script>";
		}
		else{
			echo "<script> alert('Value Not Updated') </script>";
		}
		// echo "<script> alert('$uid $ename $tottable $chtable $totalchair') </script>";
	}
	else{
		echo "<script> alert('Please Input Value') </script>";
	}
}

?>