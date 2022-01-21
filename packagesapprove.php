<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Packages Approve </title>
	<link rel="stylesheet" type="text/css" href="CSS/requests.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
			        <a href="requests.php">
			        <i></i>
			        <span class="links_name"> Approve Events </span>
			        </a>
			    </li>
			    <li>
			        <a href="packagesapprove.php" class="active">
			      	<i></i>
			        <span class="links_name"> Approve Packages </span>
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
		          
		          <span class="dashboard">Packages Approve</span>
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
		        <div class="sales-boxes">
		          <div class="recent-sales">

						<h2> Packages </h2>

						<table border="1">
							<tr>
								<th> FOOD CATEGORY </th>
								<th> FOOD ITEMS </th>
								<th> FOOD TYPE </th>
								<th> SIZE </th>
								<th> SUITE FOR PEOPLE </th>
								<th> PRICE </th>
								<th> APPROVED/NOT APPROVED </th>
								<th> APPROVE </th>
								<th> CANCEL APPROVE </th>
							</tr>	

							<?php

								include("connection.php");
								$query="SELECT * FROM `PACKAGE_MST`";
								$res=mysqli_query($con, $query);
								while ($row=mysqli_fetch_assoc($res)) {
									$aid=$row['ID'];
									echo "<tr>";
									echo "<td>".$row['FOOD_CAT']."</td>";
									echo "<td>".$row['FOOD_ITEMS']."</td>";
									echo "<td>".$row['CAT_FOOD']."</td>";
									echo "<td>".$row['SIZE']."</td>";
									echo "<td>".$row['SUIT_PEOPLE']."</td>";
									echo "<td>".$row['PRICE']."</td>";
									echo "<td>".$row['APPROVE']."</td>";
									echo "<td> <a href='approvepackages.php?id=$aid'> Approve </a> </td>";
									echo "<td> <a href='cancelpackage.php?id=$aid'> Approve Cancel </a> </td>";
									echo "</tr>";
								}

							?>

						</table>
						

				   </div>
				</div>
			  </div>
			</div>

		</section>

	</body>
</html>