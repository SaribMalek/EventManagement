		<div class="sidebar">
		    <div class="logo-details">
		      <i></i>
		      <span class="logo_name">Admin Panel</span>
		    </div>
		      <ul class="nav-links">
		        <li>
		          <a href="#" class="active">
		          	<i></i>
		            <span class="links_name">Dashboard</span>
		          </a>
		        </li>

		        <?php $uty=$_SESSION['utype']; 

		        if($uty=="Admin"){
		        ?>
			        <li>
			          <a href="requests.php">
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

			        <!-- <li>
			          <a href="#organizers.php">
			          	<i></i>
			            <span class="links_name"> Organizers </span>
			          </a>
			        </li> -->

			        <?php
			  	}
		    	elseif($uty=="Organizer"){
		    	?>
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
			            <span class="links_name"> Guests Edit </span>
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
			    <?php
				}
				elseif($uty=="Caterer"){
				?>

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

				<?php
				}
				?>
		        <li class="log_out">
		          <a href="logout.php">
		          	<i></i>
		            <span class="links_name">Log out</span>
		          </a>
		        </li>
		      </ul>
		  </div>


		