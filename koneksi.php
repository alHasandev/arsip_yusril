<?php 

$host = $_ENV['HOSTNAME'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$dbname = $_ENV['DATABASE_NAME'];

 $koneksi = new mysqli("localhost", "root", "", "pt_baktiputra");
