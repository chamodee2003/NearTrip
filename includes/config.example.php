<?php
/**
 * Local database configuration template.
 * Copy this file to config.php and update the connection settings as needed.
 */

define('DB_SERVER', '127.0.0.1');
define('DB_PORT', 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'neartrip');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
date_default_timezone_set('Asia/Colombo');

require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/functions.php';
?>
