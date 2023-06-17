<?php

use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hostname = $_ENV['AIVEN_HOST'];
$username = $_ENV['AIVEN_USER'];
$password = $_ENV['AIVEN_PASSWORD'];
$database = $_ENV['AIVEN_NAME'];
$port = $_ENV['AIVEN_PORT'];

$db = mysqli_connect($hostname, $username, $password, $database, $port);

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
