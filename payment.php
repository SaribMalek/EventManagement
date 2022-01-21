<?php
session_start();
if(!$_SESSION['utype']){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Payment </title>
	<link rel="stylesheet" type="text/css" href="CSS/payment.css">
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
			        <a href="createevent.php"  class="active">
			        <i></i>
			            <span class="links_name"> Create Event </span>
			          </a>
			        </li>

			         <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> View Event </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Service </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Location </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Guests </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Cost Event </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Add/Remove Images </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Add/Remove Tables </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Add/Remove Tasks </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Edit Profile </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
			          	<i></i>
			            <span class="links_name"> Search Services </span>
			          </a>
			        </li>

			        <li>
			          <a href="#">
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
		          <span class="dashboard">Payment</span>
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
			</div>

			<div class="home-content">
		      <div class="overview-boxes">
		        <div class="sales-boxes">
		          <div class="recent-sales">

						<h2> Payment </h2>

						<form method="post">
							<div class="content">
								<span> Card Number : </span> <input type="text" name="cno" placeholder="Card Number...">
								<span> Card Holder Name : </span> <input type="text" name="cname" placeholder="Card Holder Name...">
								<span> Card Type : </span> 
								<select name="ctype" style="background-color: white;">
									<option value=""> Select Value </option>
									<option value="VISA"> VISA </option>
									<option value="Debit"> Debit </option>
									<option value="Credit"> Credit </option>
									<option value="Prepaid"> Prepaid </option>
								</select>
								<span> Card Expiry Date (MM/YY) : </span> <input type="text" name="edate" placeholder="Card Expiry Date...">
								<span> CVV Number : </span> <input type="text" name="cvvno" placeholder="Card CVV Number...">
								<div class="btnclass">
								<input type="submit" name="check" value="Pay"> 
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
	
// $(document).ready(function(){
// 	$("#click").click(function(){
// 		$("#form1").toggle();
// 	});
// });

</script> -->

</body>
</html>

<?php

// if(isset($_POST['check'])){

// 	$cno=$_POST['cno'];
// 	$cnm=$_POST['cname'];
// 	$ctype=$_POST['ctype'];
// 	$edt=$_POST['edate'];
// 	$cvvn=$_POST['cvvno'];

// 	if(!empty($cno) && !empty($cnm) && !empty($ctype) && !empty($edt) && !empty($cvvn)){
		// echo "<script> alert('$cno $cnm $ctype $edt $cvvn') </script>";
// 	}
// 	else{
// 		echo "<script> alert('Please Input Value') </script>";
// 	}
// }

?>