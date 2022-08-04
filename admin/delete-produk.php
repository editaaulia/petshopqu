<?php
    session_start();
    include '../config.php';

    $idproduk = $_GET['id'];
    $submit=mysqli_query($kon,"DELETE FROM `tb_produk` WHERE ID_produk=$idproduk");

    
    if($submit){
        echo "<script> alert('Hapus Data Berhasil!'); </script>";
        header('location: ./Product.php');
    }else{
        echo "<script> alert('Hapus Data Gagal!'); </script>";
    }