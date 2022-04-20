<?php

require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$host = $_ENV['HOSTNAME'] ?? "alhasand_arsip_yusril";
$username = $_ENV['USERNAME'] ?? "alhasand_arsip_yusril";
$password = $_ENV['PASSWORD'] ?? "arsip_yusril";
$dbname =  $_ENV['DATABASE_NAME'] ?? "alhasand_arsip_yusril";

$koneksi = new mysqli($host, $username, $password, $dbname);
