<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Cost Edit </title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/cost.css">
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
			          <a href="costaddremove.php" class="active">
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
		          <span class="dashboard">Cost Edit</span>
		        </div>
		        <div class="search-box">
		          <input type="text" placeholder="Search...">
		          <i class='bx bx-search'></i>
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

						<h2> Edit Cost </h2>


							<?php
							$id=$_GET['uid'];
							$enm=$_GET['ename'];
							include("connection.php");
							$query="SELECT * FROM TOTAL_COST WHERE ID='$id'";
							$res=mysqli_query($con, $query);
							while ($row=mysqli_fetch_assoc($res)) {
								$evname=$row['ENAME'];
								$pprice=$row['PLOAT_PRICE'];
								$tch=$row['TOT_CHAIR'];
								$cch=$row['COST_CHAIR'];
								$tsofa=$row['TOT_SOFA'];
								$csofa=$row['COST_SOFA'];
								$ttab=$row['TOT_TABLE'];
								$ctab=$row['COST_TABLE'];
								$cdesc=$row['COST_DEC'];
								$tprice=$row['TOT_PRICE'];
							}

							?>

						<form method="post" enctype="multipart/form-data">
							<div class="content">

								<?php

									include("connection.php");
									$query="SELECT ENAME FROM TOTAL_COST";
									$res=mysqli_query($con, $query);
								?>

									<span> Select Option : </span>
									<select name="ename" style="background-color: white;">
									<option value=""> Select Option </option>
								<?php
									while ($row=mysqli_fetch_assoc($res)) {			
								?>

									<option value="<?php echo $row[ENAME] ?>" <?php if($enm==$row['ENAME']){?> selected <?php }?>> <?php echo $row['ENAME'] ?> </option>

								<?php
								}

								?>
								</select>

								<span> Cost For Party Ploat : </span> <input type="text" name="pcost" id="ppric" placeholder="Party Ploat Cost..." value="<?php echo $pprice; ?>">
								<span> Total Number Of Chairs : </span> <input type="text" name="tcha" id="txtprice" placeholder="Total Chairs..." value="<?php echo $tch; ?>">
								<span> Total Cost For Chairs : </span> <input type="text" name="ccha" id="tch" placeholder="Cost Per Chair..." value="<?php echo $cch; ?>">
								<span> Total Of Sofas : </span> <input type="text" name="tsofa" id="tots" placeholder="Total Sofa..." value="<?php echo $tsofa; ?>">
								<span> Total Cost FOr Sofa : </span> <input type="text" name="csofa" id="sofapri" placeholder="Cost Per Sofa..." value="<?php echo $csofa; ?>">
								<span> Total Of Tables : </span> <input type="text" name="ttab" id="tottab" placeholder="Total Tables..." value="<?php echo $ttab; ?>">
								<span> Total Cost For Tables : </span> <input type="text" name="tcost" id="tabpri" placeholder="Cost Per Table..." value="<?php echo $ctab; ?>">
								<span> Cost Of Decoration : </span> <input type="text" name="cdec" id="totdec" placeholder="Cost For Decoration..." value="<?php echo $cdesc; ?>">
								<span> Total Amount : </span> <input type="text" name="tcost" id="totalprice" placeholder="Total Cost..." value="<?php echo $tprice; ?>">
								<div class="btnclass">
								<input type="submit" name="check" value="Total Cost"> 
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
	var sum=0;
	$("#ppric").change(function(){
		n0=$(this).val();
		sum =parseInt(n0);
		$("#totalprice").val(sum);
	});
	$("#txtprice").change(function(){
		var n1=$(this).val();
		var tot = n1 * 10;
		$("#tch").val(tot);
		sum= sum + tot;
		$("#totalprice").val(sum);
	});

	$("#tots").change(function(){
		var n2=$(this).val();
		var tot1 = n2 * 25;
		$("#sofapri").val(tot1);
		sum = sum + tot1;
		$("#totalprice").val(sum);
	});

	$("#tottab").change(function(){
		var n3=$(this).val();
		var tot2 = n3 * 30;
		$("#tabpri").val(tot2);
		sum = sum + tot2;
		$("#totalprice").val(sum);
	});
	
	$("#totdec").change(function(){
		var dectot=parseInt($(this).val());
		// var nn4=parseInt($("#ppric").val());
		var tot = sum + dectot;
		$("#totalprice").val(tot);
	});
});


</script>

</body>
</html>

<?php

if(isset($_POST['check'])){
	$enm=$_POST['ename'];
	$pprice=$_POST['pcost'];
	$tcha=$_POST['tcha'];
	$pcha=$_POST['ccha'];
	$tsof=$_POST['tsofa'];
	$psofa=$_POST['csofa'];
	$ttabl=$_POST['ttab'];
	$ptab=$_POST['tcost'];
	$tdec=$_POST['cdec'];
	$totprice=$_POST['tcost'];

	if(!empty($enm) && !empty($pprice) && !empty($tcha) && !empty($pcha) && !empty($tsof) && !empty($psofa) && !empty($ttabl) && !empty($ptab) && !empty($tdec) && !empty($totprice)){
		include("connection.php");

		$query="UPDATE `TOTAL_COST` SET `ENAME`='$enm',`PLOAT_PRICE`='$pprice',`TOT_CHAIR`='$tcha',`COST_CHAIR`='$pcha',`TOT_SOFA`='$tsof',`COST_SOFA`='$psofa',`TOT_TABLE`='$ttabl',`COST_TABLE`='$ptab',`COST_DEC`='$tdec',`TOT_PRICE`='$totprice' WHERE ID='$id'";
		$result=mysqli_query($con, $query);
		if($result==TRUE){
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