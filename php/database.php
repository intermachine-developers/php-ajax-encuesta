<?php

// composer
require('../vendor/autoload.php');

/* modules */
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

//variables database
$hostname = $_ENV['MYSQL_HOST'];
$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$database = $_ENV['MYSQL_DATABASE'];

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn -> connect_errno) {
    error_log("Failed to connect to MySQL: " . $conn -> connect_error, 0);
    exit();
  }

?>
