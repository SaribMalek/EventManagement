<?php
/**
 * Navigation Bar for Public Pages
 */
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/config/config.php';
}
?>
<div class="menu-bar">
    <ul>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php' || basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>home.php">Home</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'events.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>events.php">Events</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'bookevent.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>bookevent.php">Book Event</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'packages.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>packages.php">Packages</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>about.php">About</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>contact.php">Contact Us</a></li>
        <li class="last-child"><a href="<?php echo BASE_URL; ?>login.php">Login</a></li>
    </ul>
</div>
