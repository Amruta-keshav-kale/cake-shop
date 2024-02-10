<?php
// Start Session
session_start();

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

// Establish Database Connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check Database Connection
if (!$conn) {
    die("Failed to connect to the database: " . mysqli_connect_error());
}

// Website Configuration
define('SITEURL', 'http://localhost/cake-my-day/');

?>