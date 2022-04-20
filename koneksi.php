<?php

require_once "vendor/autoload.php";

$host = "localhost";
$username = "root";
$password = "";
$dbname =  "pt_baktiputra";

var_dump([$host, $username, $password, $dbname]);

$koneksi = new mysqli($host, $username, $password, $dbname);
