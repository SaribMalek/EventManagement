<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Add Compony Profile </title>
	<link rel="stylesheet" type="text/css" href="CSS/componyadd.css">
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
			          <a href="packageseditremove.php">
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
			          <a href="componyadd.php" class="active">
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
		          <span class="dashboard">Compony Add Profile</span>
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

						<h2> Add Compony profile </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">

								<span> Compony Name : </span> <input type="text" name="nam" placeholder="Compony Name...">
								<span> Compony Address. : </span> <input type="text" name="add" placeholder="Compony Address...">
								<span> Compony Contact No. : </span> <input type="text" name="cont" placeholder="Compony Contact No...">
								<span> Compony Email Id : </span> <input type="text" name="email" placeholder="Compony Email Id...">
								<span> Compony Image : </span> <input type="file" name="image" placeholder="Compony Image...">

								<div class="btnclass">
								<input type="submit" name="check" value="Add Compony Profile"> 
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

<?php

if(isset($_POST['check'])){

	$nm=$_POST['nam'];
	$add=$_POST['add'];
	$mno=$_POST['cont'];
	$ema=$_POST['email'];
	$img=$_FILES['image']['name'];
	$tmpname=$_FILES['image']['tmp_name'];
	$dir="/uploads/componyimage/".$img;

	if(!empty($nm) && !empty($add) && !empty($mno) && !empty($ema) && !empty($img)){
		move_uploaded_file($tmpname, __DIR__.$dir);
		include("connection.php");
		$query="INSERT INTO `COMPONY_PROFILE`(`COMP_NAME`, `COMP_ADD`, `COMP_MNO`, `COMP_EMAIL`, `COMP_IMAGE`) VALUES ('$nm','$add','$mno','$ema','$dir')";
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