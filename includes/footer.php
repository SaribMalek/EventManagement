<?php
/**
 * Common Footer for Public Pages
 */
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/config/config.php';
}
?>
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
</body>
</html>
