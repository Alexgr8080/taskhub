<?php
/**
 * MyWorkHub - Configuration File
 * 
 * This file contains all the configuration settings for the application.
 * Update the database credentials with your HostPapa database details.
 * 
 * @author Dr. Ahmed AL-sadi
 * @version 1.0
 */

// Prevent direct access
if (!defined('ROOT_PATH')) {
    die('Direct access not allowed');
}

// Database Configuration - UPDATE THESE WITH YOUR HOSTPAPA DETAILS
define('DB_HOST', 'localhost');
define('DB_NAME', 'gotoa957_my_work_hub_db'); // e.g., myworkhub
define('DB_USER', 'gotoa957_admin');
define('DB_PASS', 'medo123My@');
define('DB_CHARSET', 'utf8mb4');               // Character set

// Site Configuration
define('SITE_NAME', 'MyWorkHub');
define('SITE_URL', 'https://workhub.gotoaus.com');  // Update with your domain
define('SITE_EMAIL', 'admin@workhub.gotoaus.com');

// Security Settings
define('SECURE_KEY', 'your-secret-key-here-change-this-to-random-string');
define('SESSION_TIMEOUT', 3600); // 1 hour in seconds
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_LOCKOUT_TIME', 900); // 15 minutes

// File Upload Settings
define('MAX_UPLOAD_SIZE', 10 * 1024 * 1024); // 10MB
define('UPLOAD_PATH', ROOT_PATH . '/uploads/');
define('ALLOWED_EXTENSIONS', 'jpg,jpeg,png,gif,pdf,doc,docx,txt');

// Error Reporting (Set to 0 for production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Timezone Setting
date_default_timezone_set('Australia/Sydney'); // Change to your timezone

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>