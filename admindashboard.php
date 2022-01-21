<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Dashboard </title>
	<link rel="stylesheet" type="text/css" href="CSS/admindashboard.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

		<?php

			include("sidemenu.php");

		?>

		<section class="home-section">
		      <nav>
		        <div class="sidebar-button">
		          
		          <span class="dashboard">Dashboard</span>
		        </div>
		        <div class="search-box">
		          <input type="text" placeholder="Search...">
		          <i class='bx bx-search' ></i>
		        </div>
		        <!-- <div class="profile-details">
		          <img src="img.jpg" alt="">
		          <span class="admin_name">ABC </span>
		          <i class='bx bx-chevron-down' ></i>
		        </div>  -->
		      </nav>
			<!-- </div> -->

			
			<div class="home-content">
		      <div class="overview-boxes">

		      		<div class="box">
			          <div class="right-side">
			            <div class="box-topic">Total Users</div>
			            <div class="number">40,876</div>
			          </div>
			        </div>
			        <div class="box">
			          <div class="right-side">
			            <div class="box-topic">Total Locations</div>
			            <div class="number">38,876</div>
			          </div>
			        </div>
			        <div class="box">
			          <div class="right-side">
			            <div class="box-topic">Party Ploats</div>
			            <div class="number">12,876</div>
			          </div>
			        </div>
			        <div class="box">
			          <div class="right-side">
			            <div class="box-topic">Events Created</div>
			            <div class="number">11,086</div>
			          </div>
			        </div>
			      </div>


		        <div class="sales-boxes">
		          <div class="recent-sales">

						<h4> Total Users </h4>

						<?php

							include("connection.php");

							$query="SELECT * FROM `REG_MST`";
							$res=mysqli_query($con, $query);
							$row=mysqli_num_rows($res);
							$row1=mysqli_fetch_assoc($res);
							$_SESSION['rowid']=$row1['ID'];
							echo $row;
						?>

				   </div>
				</div>
			  </div>
			</div>

		</section>

	</body>
</html>