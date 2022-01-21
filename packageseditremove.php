<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit/Remove Package </title>
	<link rel="stylesheet" type="text/css" href="CSS/packageseditremove.css">
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
			          <a href="packagecategoryadd.php">
			          	<i></i>
			            <span class="links_name"> Add Package Category </span>
			          </a>
			        </li>

			        <li>
			          <a href="packagecategoryeditremove.php">
			          	<i></i>
			            <span class="links_name"> Edit/Remove Category </span>
			          </a>
			        </li>

					<li>
			          <a href="catererserviceadd.php">
			          	<i></i>
			            <span class="links_name"> Add Service </span>
			          </a>
			        </li>

			        <li>
			          <a href="catererserviceeditremove.php">
			          	<i></i>
			            <span class="links_name"> View Service </span>
			          </a>
			        </li>

			        <li>
			          <a href="packagesadd.php">
			          	<i></i>
			            <span class="links_name"> Add Packages </span>
			          </a>
			        </li>

			        <li>
			          <a href="packageseditremove.php" class="active">
			          	<i></i>
			            <span class="links_name"> Edit / Delete Packages </span>
			          </a>
			        </li>

			        <li>
			          <a href="caterereditprofile.php">
			          	<i></i>
			            <span class="links_name"> Edit Profile </span>
			          </a>
			        </li>

			        <li>
			          <a href="componyadd.php">
			          	<i></i>
			            <span class="links_name"> Add Compony Profile </span>
			          </a>
			        </li>

			        <li>
			          <a href="componyeditremove.php">
			          	<i></i>
			            <span class="links_name"> Edit Compony Profile</span>
			          </a>
			        </li>
			        
			        <li>
			          <a href="advertiesmentadd.php">
			          	<i></i>
			            <span class="links_name"> Add Advertiesment </span>
			          </a>
			        </li>

			        <li>
			          <a href="advertiesmenteditremove.php">
			          	<i></i>
			            <span class="links_name"> Edit/Remove Advertiesment </span>
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
		          <span class="dashboard">Edit/Remove Food Package</span>
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

						<h2> Edit/Remove Food Package </h2>

						<table border="1" style="margin-bottom: 20px;">

							<tr>
								<th> FOOD CATEGORY </th>
								<th> FOOD ITEMS </th>
								<th> FOOD TYPE </th>
								<th> FOOD IMAGE </th>
								<th> SIZE </th>
								<th> PRICE </th>
								<th> EDIT </th>
								<th> DELETE </th>
							</tr>				

							<?php

								include("connection.php");
								$query="SELECT * FROM PACKAGE_MST";
								$res=mysqli_query($con, $query);
								while($row=mysqli_fetch_assoc($res)){
									$id=$row['ID'];
									$img=".".$row['FOOD_IMG'];
							?>

								<tr>
									<td> <?php echo $row['FOOD_CAT']; ?> </td>
									<td> <?php echo $row['FOOD_ITEMS']; ?> </td>
									<td> <?php echo $row['CAT_FOOD']; ?> </td>
									<td> <img src="<?php echo $img; ?>" height="100px" width="100px"> </td>
									<td> <?php echo $row['SIZE']; ?> </td>
									<td> <?php echo $row['PRICE']; ?> </td>
									<td> <a href="packagesedit.php?id=<?php echo $id; ?>"> EDIT </a> </td>
									<td> <a href="packagesdelete.php?id=<?php echo $id; ?>&image=<?php echo $img; ?>"> DELETE </a> </td>
								</tr>

							<?php
								}

							?>			

						</table>
				  </div>
				</div>
			  </div>
			</div>
		</section>

<!-- <script type="text/javascript">
	
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

</script> -->

</body>
</html>
