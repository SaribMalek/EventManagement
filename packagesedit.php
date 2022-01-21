<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit Package </title>
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
		          <span class="dashboard">Edit Food Package</span>
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

						<h2> Edit Food Package </h2>				

							<form method="post" enctype="multipart/form-data">
							<div class="content">

							<?php
								$uid=$_GET['id'];
								include("connection.php");
								$query="SELECT * FROM PACKAGE_MST WHERE ID='$uid'";
								$res=mysqli_query($con, $query);
								while($row=mysqli_fetch_assoc($res)){
									$id=$row['ID'];
									$categ=$row['FOOD_CAT'];
									$fooddesc=$row['FOOD_DESC'];
									$fitems=$row['FOOD_ITEMS'];
									$categoryfood=$row['CAT_FOOD'];
									$img=$row['FOOD_IMG'];
									$platesize=$row['SIZE'];
									$fstat=$row['STATUS'];
									$swithpeo=$row['SUIT_PEOPLE'];
									$foodprice=$row['PRICE'];
								}

							?>	
								<span> Package Category : </span>
								<select name="category">
									<option value=""> Select Package Category </option>
									<?php

										$query="SELECT * FROM `PACKAGE_CATEGORY`";
										$res=mysqli_query($con, $query);
										while ($row=mysqli_fetch_assoc($res)) {
									?>
										<option value="<?php echo $row['CAT_NAME']; ?>" <?php if($categ==$row['CAT_NAME']){ ?> selected <?php }?>> <?php echo $row['CAT_NAME']; ?> </option>
									<?php
										}

									?>
								</select>
								
								<span> Food Description : </span> <input type="text" name="fooddesc" placeholder="Food Description..." value="<?php echo $fooddesc; ?>">
								<span> Item Contains : </span> <textarea name="fooditem" placeholder="Items In Package..."></textarea>

								<span> Category : </span> 
								<select name="foodcate">
									<option value=""> Select Category </option>
									<option value="Veg Food" <?php if($categoryfood=="Veg Food"){ ?> selected <?php } ?>> Veg Food </option>
									<option value="Non Veg Food" <?php if($categoryfood=="Non Veg Food"){ ?> selected <?php } ?>> Non Veg Food </option>
									<option value="Veg and NonVeg Food" <?php if($categoryfood=="Veg and NonVeg Food"){ ?> selected <?php } ?>> Veg and NonVeg Food </option>
								</select>

								<span> Food Image : </span> <input type="file" name="image" placeholder="Select Food Image..." value="<?php echo $img; ?>">

								<span> Size : </span>
								<select name="foodsize">
									<option value=""> Select Option </option>
									<option value="Large" <?php if($platesize=="Large"){ ?> selected <?php } ?>> Large </option>
									<option value="Medium" <?php if($platesize=="Medium"){ ?> selected <?php } ?>> Medium </option>
									<option value="Small" <?php if($platesize=="Small"){ ?> selected <?php } ?>> Small </option>
								</select>

								<span> Status : </span>
								<select name="foodsta">
									<option value=""> Select Status </option>
									<option value="Active" <?php if($fstat=="Active"){ ?> selected <?php } ?>> Active </option>
									<option value="Deactive" <?php if($fstat=="Deactive"){ ?> selected <?php } ?>> Deactive </option>
								</select>

								<span> Suitable For No. Of People :  </span> <input type="text" name="suipeople" placeholder="Suitable For No. Of People..." value="<?php echo $swithpeo; ?>">

								<span> Price : </span> <input type="text" name="pri" placeholder="Price..." value="<?php echo $foodprice; ?>">

								<div class="btnclass">
								<input type="submit" name="check" value="Update Package"> 
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
	$cat=$_POST['category'];
	$fdesc=$_POST['fooddesc'];
	$fitems=$_POST['fooditem'];
	$fcat=$_POST['foodcate'];
	$foodimg=$_FILES['image']['name'];
	$tmpimg=$_FILES['image']['tmp_name'];
	$fsize=$_POST['foodsize'];
	$fstatus=$_POST['foodsta'];
	$speople=$_POST['suipeople'];
	$fprice=$_POST['pri'];
	$dir="/uploads/foodimages/".$foodimg;

	if(!empty($cat) && !empty($fdesc) && !empty($fitems) && !empty($fcat) && !empty($foodimg) && !empty($fsize) && !empty($fstatus) && !empty($speople) && !empty($fprice)){
		if(file_exists($dir)){
			unlink($dir);
		}
		move_uploaded_file($tmpimg, __DIR__.$dir);
		include("connection.php");
		$query="UPDATE `PACKAGE_MST` SET `FOOD_CAT`='$cat',`FOOD_DESC`='$fdesc',`FOOD_ITEMS`='$fitems',`CAT_FOOD`='$fcat',`FOOD_IMG`='$dir',`SIZE`='$fsize',`STATUS`='$fstatus',`SUIT_PEOPLE`='$speople',`PRICE`='$fprice' WHERE ID='$uid'";
		$res=mysqli_query($con, $query);
		if($res==TRUE){
			echo "<script> alert('Value Updated Sucessfully') </script>";
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