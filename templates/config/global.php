<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "rt005";

$kon = mysqli_connect($host, $pelanggan, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}