<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Caterer Edit Profile </title>
	<link rel="stylesheet" type="text/css" href="CSS/caterereditprofile.css">
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
			          <a href="#catererserviceadd.php">
			          	<i></i>
			            <span class="links_name"> Add Service </span>
			          </a>
			        </li>

			        <li>
			          <a href="#catererserviceeditremove.php">
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
			          <a href="caterereditprofile.php" class="active">
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
			          <a href="#componyeditremove.php">
			          	<i></i>
			            <span class="links_name"> Edit Compony Profile</span>
			          </a>
			        </li>
			        
			        <li>
			          <a href="#advertiesmentadd.php">
			          	<i></i>
			            <span class="links_name"> Add Advertiesment </span>
			          </a>
			        </li>

			        <li>
			          <a href="#advertiesmenteditremove.php">
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
		          <span class="dashboard">Caterer Edit Profile</span>
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

						<h2> Caterer Edit Profile </h2>

						<form method="post" enctype="multipart/form-data">
							<div class="content">
								<?php

									$email=$_SESSION['userid'];
									include("connection.php");
									$query="SELECT * FROM REG_MST WHERE EMAIL='$email'";
									$res=mysqli_query($con, $query);
									while ($row=mysqli_fetch_assoc($res)) {
										$uid=$row['ID'];
										$nm=$row['NAME'];
										$mn=$row['MONO'];
										$em=$row['EMAIL'];
										$ad=$row['UADD'];
										$ut=$row['UTYPE'];
									}

								?>

								<span> Name : </span> <input type="text" name="nam" placeholder="Name..." value="<?php echo $nm; ?>">
								<span> Mobile No. : </span> <input type="text" name="mno" placeholder="Mobile No..." value="<?php echo $mn; ?>">
								<span> Email Id : </span> <input type="text" name="ema" placeholder="Email Id..." value="<?php echo $em; ?>">
								<span> Address : </span> <input type="text" name="add" placeholder="Address..." value="<?php echo $ad; ?>">
								<span> User Type : </span>
								<select name="utype">
									<option value="Organizer" <?php if($ut!="Organizer"){ ?> disabled <?php } ?>> Organizer </option>
									<option value="Caterer" <?php if($ut!="Caterer"){ ?> disabled <?php } ?>> Caterer </option>
									<option value="Admin" <?php if($ut!="Admin"){ ?> disabled <?php } ?>> Admin </option>
								</select>

								<div class="btnclass">
								<input type="submit" name="check" value="Edit Profile"> 
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

	$name=$_POST['nam'];
	$mobno=$_POST['mno'];
	$email=$_POST['ema'];
	$addr=$_POST['add'];
	$utyp=$_POST['utype'];

	if(!empty($name) && !empty($mobno) && !empty($email) && !empty($addr) && !empty($utyp)){
		include("connection.php");
		$query="UPDATE `REG_MST` SET `NAME`='$name',`MONO`='$mobno',`EMAIL`='$email',`UADD`='$addr',`UTYPE`='$utyp' WHERE ID='$uid'";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
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