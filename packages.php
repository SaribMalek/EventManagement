<?php
require_once __DIR__ . '/config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Packages - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>packages.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <div class="content">

        <div class="img" style="background-image: url(<?php echo IMAGES_URL; ?>bg1.jpg); background-repeat: repeat-y; background-size: cover; width: 100%;">
            <div class="menu-bar">
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>home.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>events.php">Events</a></li>
                    <li><a href="<?php echo BASE_URL; ?>bookevent.php">Book Event</a></li>
                    <li><a class="active" href="<?php echo BASE_URL; ?>packages.php">Packages</a></li>
                    <li><a href="<?php echo BASE_URL; ?>about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
                    <li class="last-child"><a href="<?php echo BASE_URL; ?>login.php">Login</a></li>
                </ul>
            </div>
        </div>

        <?php
        require_once INCLUDES_PATH . 'connection.php';

        $query = "SELECT * FROM PACKAGE_MST WHERE APPROVE='Approaved' OR APPROVE='Approved'";
        $res = mysqli_query($con, $query);
        if (mysqli_num_rows($res) > 0) {
        ?>

            <div class="booking-content">
                <div class="book-ticket">
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {
                        $img = BASE_URL . ltrim($row['FOOD_IMG'], '/');
                    ?>
                        <div class="ticket">
                            <img src="<?php echo $img; ?>">
                            <p><?php echo htmlspecialchars($row['FOOD_CAT']); ?></p>
                            <input type="submit" value="Buy Package">
                            <span>Price: <?php echo htmlspecialchars($row['PRICE']); ?>&#8377;</span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php } ?>

        <div class="subscribe-content">
            <div class="subscribe">
                <h2>Subscribe Section</h2>
                <input type="text" placeholder="Enter Your Email...">
                <input type="submit" value="Subscribe">
            </div>
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