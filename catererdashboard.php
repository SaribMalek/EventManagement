<!DOCTYPE html>
<html>
<head>
	<title> Caterer Dashboard </title>
	<link rel="stylesheet" type="text/css" href="CSS/catererdashboard.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

		<div class="sidebar">
		    <div class="logo-details">
		    
		      <span class="logo_name">Caterer Panel</span>
		    </div>
		      <ul class="nav-links">
		        <li>
		          <a href="#" class="active">
		          
		            <span class="links_name">Dashboard</span>
		          </a>
		        </li>

		        <li>
		          <a href="#">
		          	
		            <span class="links_name"> Requests </span>
		          </a>
		        </li>

		          <li>
		          <a href="#">
		          	
		            <span class="links_name"> Analytics </span>
		          </a>
		        </li>
		        
		        <li class="log_out">
		          <a href="#">
		          	
		            <span class="links_name">Log out</span>
		          </a>
		        </li>
		      </ul>
		  </div>


		<section class="home-section">
		      <nav>
		        <div class="sidebar-button">
		          
		          <span class="dashboard">Dashboard</span>
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

						<h2> Welcome Caterer </h2>

						<div class="container">
					      <div class="calendar">
					        <div class="month">
					          <i class="fas fa-angle-left prev"></i>
					          <div class="date">
					            <h1></h1>
					            <p></p>
					          </div>
					          <i class="fas fa-angle-right next"></i>
					        </div>
					        <div class="weekdays">
					          <div>Sun</div>
					          <div>Mon</div>
					          <div>Tue</div>
					          <div>Wed</div>
					          <div>Thu</div>
					          <div>Fri</div>
					          <div>Sat</div>
					        </div>
					        <div class="days"></div>
					      </div>
					    </div>

				   </div>
				</div>
			  </div>
			</div>
		</section>

		<script type="text/javascript">
			
			const date = new Date();

			const renderCalendar = () => {
			  date.setDate(1);

			  const monthDays = document.querySelector(".days");

			  const lastDay = new Date(
			    date.getFullYear(),
			    date.getMonth() + 1,
			    0
			  ).getDate();

			  const prevLastDay = new Date(
			    date.getFullYear(),
			    date.getMonth(),
			    0
			  ).getDate();

			  const firstDayIndex = date.getDay();

			  const lastDayIndex = new Date(
			    date.getFullYear(),
			    date.getMonth() + 1,
			    0
			  ).getDay();

			  const nextDays = 7 - lastDayIndex - 1;

			  const months = [
			    "January",
			    "February",
			    "March",
			    "April",
			    "May",
			    "June",
			    "July",
			    "August",
			    "September",
			    "October",
			    "November",
			    "December",
			  ];

			  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

			  document.querySelector(".date p").innerHTML = new Date().toDateString();

			  let days = "";

			  for (let x = firstDayIndex; x > 0; x--) {
			    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
			  }

			  for (let i = 1; i <= lastDay; i++) {
			    if (
			      i === new Date().getDate() &&
			      date.getMonth() === new Date().getMonth()
			    ) {
			      days += `<div class="today">${i}</div>`;
			    } else {
			      days += `<div>${i}</div>`;
			    }
			  }

			  for (let j = 1; j <= nextDays; j++) {
			    days += `<div class="next-date">${j}</div>`;
			    monthDays.innerHTML = days;
			  }
			};

			document.querySelector(".prev").addEventListener("click", () => {
			  date.setMonth(date.getMonth() - 1);
			  renderCalendar();
			});

			document.querySelector(".next").addEventListener("click", () => {
			  date.setMonth(date.getMonth() + 1);
			  renderCalendar();
			});

			renderCalendar();
			
		</script>

	</body>
</html>