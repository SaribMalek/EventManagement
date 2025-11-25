<?php
/**
 * Event Management System
 * Main entry point - redirects to home page
 */
require_once __DIR__ . '/config/config.php';

header("Location: " . BASE_URL . "home.php");
exit();
?>
