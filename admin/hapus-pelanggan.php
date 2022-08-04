<?php
require_once "../config.php";

mysqli_query($kon, "DELETE FROM tb_pelanggan WHERE ID_pelanggan ='$_GET[ID_pelanggan]'") or 
die(mysqli_error($kon));
echo "<script> alert('Pelanggan Berhasil Dihapus'); 
window.location='pelanggan.php';</script>";
?>