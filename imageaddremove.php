<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Image Add / Remove </title>
	<link rel="stylesheet" type="text/css" href="CSS/imageaddremove.css">
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
			          <a href="imageaddremove.php" class="active">
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
		          <span class="dashboard">Add / Remove Image</span>
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

						<h2> Add Image </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								
								<span> Image Title : </span> <input type="text" name="title" placeholder="Image Title...">
								<span> Select Image : </span> <input type="file" name="image" placeholder="Select Image...">
								<span> Image Description : </span> <textarea rows="3" name="sub" placeholder="Description For Image..."></textarea>
								<div class="btnclass">
								<input type="submit" name="check" value="Add Image"> 
								<!-- <input type="submit" value="Show Payment form" id="paybtn"> -->
								</div>

							</div>
						</form>

						
				  </div>
				</div>
			  </div>

			  <div class="overview-boxes">
		        <div class="sales-boxes">
		          <div class="recent-sales">

						<h2> Remove Image </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								
								<table border="1">
									
									<tr>
										<th> ID </th>
										<th> IMAGE TITLE </th>
										<th> IMAGE </th>
										<th> IMAGE DESCRIPTION </th>
										<th> REMOVE IMAGE</th>
									</tr>

									<?php

										include("connection.php");

										$query="SELECT * FROM `IMAGE_ADD`";
										$res=mysqli_query($con, $query);
										while ($row=mysqli_fetch_assoc($res)) {
											$did=$row['ID'];
											$imgsrc=".".$row['IMG_LOC'];
											echo "<tr> <td>".$row['ID']."</td>";
											echo "<td>".$row['IMG_TITLE']."</td>";
											echo "<td> <img src='$imgsrc' height='100px' width='100px'></td>";
											echo "<td>".$row['IMG_DESC']."</td>";
											echo "<td> <a href='imageremove.php?id=$did&img=$imgsrc'> Remove Image </a> </td></tr>";
										}

									?>

								</table>

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
	$tit=$_POST['title'];
	$imgnm=$_FILES['image']['name'];
	$tmpfile=$_FILES['image']['tmp_name'];
	$subject=$_POST['sub'];
	$dir="/uploads/upload/".$imgnm;
	// echo "<script> alert('$dir') </script>";

	if(!empty($tit) && !empty($imgnm) && !empty($subject)){

		include("connection.php");
		$ins="INSERT INTO `IMAGE_ADD`(`IMG_TITLE`, `IMG_LOC`, `IMG_DESC`) VALUES ('$tit','$dir','$subject')";
		$res=mysqli_query($con, $ins) or die("<script> alert('ERROR') </script>");
		if($res==TRUE){
			move_uploaded_file($tmpfile, __DIR__.$dir);
			echo "<script> alert('Value Inserted Sucessfully') </script>";
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