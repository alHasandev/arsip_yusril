<?php

require_once "vendor/autoload.php";

// use Dotenv\Dotenv;

// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->safeload();


$host = @$_ENV['HOSTNAME'] ? $_ENV['HOSTNAME'] : "localhost";
$username = @$_ENV['USERNAME'] ? $_ENV['USERNAME'] : "alhasand_arsip_yusril";
$password = @$_ENV['PASSWORD'] ? $_ENV['PASSWORD'] : "arsip_yusril";
$dbname = @$_ENV['DATABASE_NAME'] ? $_ENV['DATABASE_NAME'] : "alhasand_arsip_yusril";

var_dump([$_ENV['HOSTNAME'], $_ENV['USERNAME'], $_ENV['PASSWORD'], $_ENV['DATABASE_NAME']]);

$koneksi = new mysqli($host, $username, $password, $dbname);
