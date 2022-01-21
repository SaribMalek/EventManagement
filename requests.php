<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Approve Events </title>
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
			        <a href="requests.php" class="active">
			        <i></i>
			        <span class="links_name"> Approve Events </span>
			        </a>
			    </li>
			    <li>
			        <a href="packagesapprove.php">
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
		          
		          <span class="dashboard">Approve Events</span>
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

						<h2> Approve Events </h2>

						<table border="1">
							<tr>
								<th> EVENT CREATOR NAME </th>
								<th> MOBILE NO. </th>
								<th> EMAIL </th>
								<th> EVENT NAME </th>
								<th> EVENT LOCATION </th>
								<th> EVENT DATE </th>
								<th> APPROVED/NOT APPROVED </th>
								<th> APPROVE </th>
								<th> CANCEL APPROVE </th>
							</tr>	

							<?php

								include("connection.php");
								$query="SELECT * FROM `EVENT_CREATE`";
								$res=mysqli_query($con, $query);
								while ($row=mysqli_fetch_assoc($res)) {
									$aid=$row['ID'];
									echo "<tr>";
									echo "<td>".$row['CNAME']."</td>";
									echo "<td>".$row['MONO']."</td>";
									echo "<td>".$row['EMAIL']."</td>";
									echo "<td>".$row['ENAME']."</td>";
									echo "<td>".$row['ELOC']."</td>";
									echo "<td>".$row['EDATE']."</td>";
									echo "<td>".$row['APPROVE']."</td>";
									echo "<td> <a href='approve.php?id=$aid'> Approve </a> </td>";
									echo "<td> <a href='approvecancel.php?id=$aid'> Approve Cancel </a> </td>";
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