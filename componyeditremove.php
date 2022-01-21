<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit Compony Profile </title>
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
			          <a href="componyadd.php">
			          	<i></i>
			            <span class="links_name"> Add Compony Profile </span>
			          </a>
			        </li>

			        <li>
			          <a href="componyeditremove.php" class="active">
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
		          <span class="dashboard">Edit Compony Profile</span>
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

						<h2> Edit Compony profile </h2>

						<?php

							include("connection.php");
							$query="SELECT * FROM COMPONY_PROFILE";
							$res=mysqli_query($con, $query);
							while ($row=mysqli_fetch_assoc($res)) {
								$uid=$row['ID'];
								$cmpname=$row['COMP_NAME'];
								$cmpadd=$row['COMP_ADD'];
								$cmpmono=$row['COMP_MNO'];
								$cmpemail=$row['COMP_EMAIL'];
								$cmpimage=".".$row['COMP_IMAGE'];
							}

						?>

						<form method="post" enctype="multipart/form-data">
							<div class="content">

								<span> Compony Name : </span> <input type="text" name="nam" placeholder="Compony Name..." value="<?php echo $cmpname; ?>">
								<span> Compony Address. : </span> <input type="text" name="mno" placeholder="Compony Address..." value="<?php echo $cmpadd; ?>">
								<span> Compony Contact No. : </span> <input type="text" name="ema" placeholder="Compony Contact No..." value="<?php echo $cmpmono; ?>">
								<span> Compony Email Id : </span> <input type="text" name="add" placeholder="Compony Email Id..." value="<?php echo $cmpemail; ?>">

								<img src="<?php echo $cmpimage; ?>" id="imghid" height="100px" width="100px;"> <!-- <a href="#" id="imgshow"> Change Image </a> --> <br>

								<span> Change Compony Image : </span> <input type="file" name="image" placeholder="Compony Image...">

								<div class="btnclass">
								<input type="submit" name="check" value="Edit Compony Profile"> 
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
	$("#imgshow").click(function(){
		$(this).hide();
		$("#imghid").hide();
	});
});

</script> -->

</body>
</html>

<?php

if(isset($_POST['check'])){

	$name=$_POST['nam'];
	$mobno=$_POST['mno'];
	$email=$_POST['ema'];
	$addr=$_POST['add'];
	$img=$_FILES['image']['name'];
	$tmpname=$_FILES['image']['tmp_name'];
	$dir="/uploads/componyimage/".$img;

	if(!empty($name) && !empty($mobno) && !empty($email) && !empty($addr) && !empty($img)){
		include("connection.php");
		$query="UPDATE `COMPONY_PROFILE` SET `COMP_NAME`='$name',`COMP_ADD`='$addr',`COMP_MNO`='$mobno',`COMP_EMAIL`='$email',`COMP_IMAGE`='$dir' WHERE ID='$uid'";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			unlink($cmpimage);
			move_uploaded_file($tmpname, __DIR__.$dir);
			echo "<script> alert('Value Updated Sucessfullfully') </script>";
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