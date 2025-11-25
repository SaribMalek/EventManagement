<?php
/**
 * Event Management System - Configuration File
 * Contains all system-wide constants and settings
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Base URL Configuration
define('BASE_URL', 'http://localhost/EventManagement/');

// Directory Paths
define('ROOT_PATH', dirname(__DIR__) . '/');
define('INCLUDES_PATH', ROOT_PATH . 'includes/');
define('ASSETS_PATH', ROOT_PATH . 'assets/');
define('UPLOADS_PATH', ROOT_PATH . 'uploads/');

// URL Paths for links
define('ASSETS_URL', BASE_URL . 'assets/');
define('CSS_URL', ASSETS_URL . 'css/');
define('JS_URL', ASSETS_URL . 'js/');
define('IMAGES_URL', ASSETS_URL . 'images/');
define('UPLOADS_URL', BASE_URL . 'uploads/');

// Module URLs
define('ADMIN_URL', BASE_URL . 'admin/');
define('ORGANIZER_URL', BASE_URL . 'organizer/');
define('CATERER_URL', BASE_URL . 'caterer/');
define('ACTIONS_URL', BASE_URL . 'actions/');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'EVENT_MGT');

// Site Information
define('SITE_NAME', 'Event Management System');
define('SITE_EMAIL', 'admin@eventmanagement.com');

?>
