<?php

require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$host = $_ENV['HOSTNAME'] ?? "localhost";
$username = $_ENV['USERNAME'] ?? "root";
$password = $_ENV['PASSWORD'] ?? "";
$dbname =  $_ENV['DATABASE_NAME'] ?? "pt_baktiputra";

$koneksi = new mysqli($host, $username, $password, $dbname);
