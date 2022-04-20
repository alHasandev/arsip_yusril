<?php

require_once "vendor/autoload.php";


$host = "localhost";
$username = "alhasand_arsip_yusril";
$password = "arsip_yusril";
$dbname = "alhasand_arsip_yusril";

var_dump([$_ENV['HOSTNAME'], $_ENV['USERNAME'], $_ENV['PASSWORD'], $_ENV['DATABASE_NAME']]);

$koneksi = new mysqli($host, $username, $password, $dbname);
