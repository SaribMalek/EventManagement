<?php
/**
 * Database Connection File
 */

// Include config if not already included
if (!defined('DB_HOST')) {
    require_once dirname(__DIR__) . '/config/config.php';
}

// Create database connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($con->connect_error) {
    die("Connection Error: " . $con->connect_error);
}

// Set charset to UTF-8
$con->set_charset("utf8");
?>
