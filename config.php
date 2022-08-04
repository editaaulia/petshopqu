<?php
$host = "localhost";
$tb_pelanggan = "root";
$password = "";
$db = "db_petshopqu";

$kon = mysqli_connect($host, $tb_pelanggan, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}