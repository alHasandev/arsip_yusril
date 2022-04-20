<?php

require_once "vendor/autoload.php";

// use Dotenv\Dotenv;

// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->safeload();


$host = @$_ENV['HOSTNAME'] ? $_ENV['HOSTNAME'] : "localhost";
$username = @$_ENV['USERNAME'] ? $_ENV['USERNAME'] : "root";
$password = @$_ENV['PASSWORD'] ? $_ENV['PASSWORD'] : "";
$dbname = @$_ENV['DATABASE_NAME'] ? $_ENV['DATABASE_NAME'] : "pt_baktiputra";

var_dump([$host, $username, $password, $dbname]);

$koneksi = new mysqli($host, $username, $password, $dbname);
