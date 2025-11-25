<?php
require_once __DIR__ . '/config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>home.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <div class="content">

        <div class="img" style="background-image: url(<?php echo IMAGES_URL; ?>bg1.jpg); background-repeat: repeat-y; background-size: cover; width: 100%;">
            <div class="menu-bar">
                <ul>
                    <li><a class="active" href="<?php echo BASE_URL; ?>home.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>events.php">Events</a></li>
                    <li><a href="<?php echo BASE_URL; ?>bookevent.php">Book Event</a></li>
                    <li><a href="<?php echo BASE_URL; ?>packages.php">Packages</a></li>
                    <li><a href="<?php echo BASE_URL; ?>about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
                    <li class="last-child"><a href="<?php echo BASE_URL; ?>login.php">Login</a></li>
                </ul>
            </div>
        </div>


        <div class="booking-content">
            <h2>Tickets Of Events</h2>
            <div class="book-ticket">
                <div class="ticket">
                    <img src="<?php echo IMAGES_URL; ?>loc1.jpg">
                    <p>31st Celebration</p>
                    <input type="submit" value="Book Ticket"> <span>Price: 100&#8377;</span>
                </div>
                <div class="ticket">
                    <img src="<?php echo IMAGES_URL; ?>loc2.jpg">
                    <p>Sport Day Celebration</p>
                    <input type="submit" value="Book Ticket"> <span>Price: 100&#8377;</span>
                </div>
                <div class="ticket">
                    <img src="<?php echo IMAGES_URL; ?>loc3.jpg">
                    <p>Annual Day Celebration</p>
                    <input type="submit" value="Book Ticket"> <span>Price: 100&#8377;</span>
                </div>
            </div>
            <div class="book-ticket">
                <div class="ticket">
                    <img src="<?php echo IMAGES_URL; ?>loc4.jpg">
                    <p>31st Celebration</p>
                    <input type="submit" value="Book Ticket"> <span>Price: 100&#8377;</span>
                </div>
                <div class="ticket">
                    <img src="<?php echo IMAGES_URL; ?>loc5.jpg">
                    <p>Sport Day Celebration</p>
                    <input type="submit" value="Book Ticket"> <span>Price: 100&#8377;</span>
                </div>
                <div class="ticket">
                    <img src="<?php echo IMAGES_URL; ?>loc6.jpg">
                    <p>Annual Day Celebration</p>
                    <input type="submit" value="Book Ticket"> <span>Price: 100&#8377;</span>
                </div>
            </div>
        </div>

        <div class="event-main-content">
            <div class="event-content">
                <center><h2>Events</h2></center>
                <div class="event-row">
                    <div class="event-col">
                        <h3>31st Celebration</h3>
                        <img src="<?php echo UPLOADS_URL; ?>loc1.jpg">
                        <p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you're a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required.</p>
                        <a href="<?php echo BASE_URL; ?>bookevent.php"><input type="submit" value="Book Event"></a>
                    </div>
                    <div class="event-col">
                        <h3>Christmas</h3>
                        <img src="<?php echo UPLOADS_URL; ?>loc2.jpg">
                        <p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you're a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required.</p>
                        <a href="<?php echo BASE_URL; ?>bookevent.php"><input type="submit" value="Book Event"></a>
                    </div>
                    <div class="event-col">
                        <h3>Sport Day Celebration</h3>
                        <img src="<?php echo UPLOADS_URL; ?>loc3.jpg">
                        <p class="par">Event Management is outstanding amongst other lines of business to get into. Regardless of whether you're a beginner, as yet taking in the ropes or a master that knows to deal it well extremely well, you would realize that an occasion site is more than required.</p>
                        <a href="<?php echo BASE_URL; ?>bookevent.php"><input type="submit" value="Book Event"></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="sponser-content">
            <div class="sponser">
                <div class="sponser-images">
                    <h3>Sponsors</h3>
                    <img src="<?php echo IMAGES_URL; ?>spo1.png">
                    <img src="<?php echo IMAGES_URL; ?>spo2.png">
                    <img src="<?php echo IMAGES_URL; ?>spo3.png">
                    <img src="<?php echo IMAGES_URL; ?>spo4.png">
                </div>
            </div>
        </div>

        <div class="subscribe-content">
            <form method="post">
                <div class="subscribe">
                    <h2>Subscribe Section</h2>
                    <input type="text" name="sub" placeholder="Enter Your Email...">
                    <input type="submit" value="Subscribe" name="check">
                </div>
            </form>
        </div>

        <footer>
            <div class="fot-content">
                <h3>Pages</h3>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>home.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>events.php">Event</a></li>
                    <li><a href="<?php echo BASE_URL; ?>bookevent.php">Book Event</a></li>
                    <li><a href="<?php echo BASE_URL; ?>about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="fot-content-right">
                <h3>Links</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>
</html>

<?php

if (isset($_POST['check'])) {
    $subid = $_POST['sub'];
    $currentdate = date("Y/m/d H:i:s");

    if (!empty($subid)) {
        require_once INCLUDES_PATH . 'connection.php';
        $query = "INSERT INTO `SUBSCRIBE_MST`(`SEMAIL`, `SDATE`) VALUES ('$subid','$currentdate')";
        $res = mysqli_query($con, $query);

        if ($res == TRUE) {
            echo "<script>alert('Subscribed Successfully')</script>";
        } else {
            echo "<script>alert('Subscription Failed')</script>";
        }
    } else {
        echo "<script>alert('Please Enter Your Email')</script>";
    }
}

?>