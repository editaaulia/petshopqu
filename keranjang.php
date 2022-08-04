<?php
session_start();
include "config.php";
if(!isset($_SESSION['pelanggan'])){
    echo"<script>alert('Silahkan Login Dahulu'); </script>";
    echo"<script>location='login.php'; </script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Serif:ital,wght@1,300&family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Template Main CSS File -->
    <link href="templates/css/style.css" rel="stylesheet">

    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>PETSHOPQU</title>
</head>

<!--header-->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm p-3 fixed-top" style="background-color: #F5D14B;">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php"> PETSHOPQU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
            </button>
            <div class="header">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="product.php">PRODUCT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                              LOGIN/REGISTER
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="login.php">LOGIN</a>
                                <a class="dropdown-item" href="register.php">REGISTER</a></li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">LOGOUT</a>
                        </li>
                        <li class="nav-item">
                            <li>
                                <a href="keranjang.php"><img src="templates/img/shopping-cart32.png" style="height: 20px; margin-top: 10px;;"></a>
                            </li>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
    </nav>
    <?php
        $idpesanproduk=mysqli_real_escape_string($kon, @$_GET['idpesanproduk']);
        $proses=mysqli_real_escape_string($kon, @$_GET['proses']);
        
        

        if ($proses=="hapus "){
            
            $hapus=mysqli_query($kon, "DELETE FROM pesanan WHERE ID_pesanproduk='$idpesanproduk' ");
            if($hapus){
                echo "Barang berhasil dihapus dari keranjang belanja ";

            }else{
                echo "Barang gagal dihapus dari keranjang belanja ";
            }
        }elseif($proses=="update "){
            $pesanproduk=mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM proses_pesanan WHERE ID_pesanproduk='$idpesanproduk' "));
            $jumlah=mysqli_real_escape_string($kon, @$_POST['jumlah']);
            $subtotal=$pesanproduk['harga'] * $jumlah;
            $update=mysqli_query($kon, "UPDATE pesanan_proses SET jumlah='$jumlah' , subtotal='$subtotal' WHERE ID_pesanproduk='$idpesanproduk' ");
            if($update){
                echo "Jumlah dan Subtotal berhasil di ubah ";
            }else{
                echo "Jumlah dan subtotal gagal di ubah ";
            }
        }
    ?>

    <!--Menu Section Ends-->
    <div class="main-content10 ">
        <div class="wrapper10 ">
            <h1>Keranjang Anda :</h1>
            <br /><br />

            <table class="table3 ">
                <tr>
                    <th>Produk</th>
                    <th>Details</th>
                    <th> </th>
                    <th> </th>
                    <th>QTY</th>
                    <th>Total</th>
                    <th> </th>

                </tr>

                <?php
                $i=1;
                $totalakhir=0;
                $iduser=$_SESSION['pelanggan']['iduser'];
                $ambil=mysqli_query($kon,"SELECT * FROM user WHERE iduser='$iduser' ");
                $pecah=mysqli_fetch_array($ambil);
                $daftarbeli=mysqli_query($kon, "SELECT * FROM pesanan a LEFT JOIN produk b ON a.idproduk=b.idproduk WHERE iduser='$iduser' AND status='Cart' ");
                $fotobarang=mysqli_query($kon, "SELECT gambar FROM pesanan a LEFT JOIN produk b ON a.idproduk=b.idproduk WHERE iduser='$iduser' AND status='Cart' ");
                while($daftarbeli1=mysqli_fetch_array($daftarbeli)){
                    $fotobarang1=mysqli_fetch_array($fotobarang);
            ?>

		<tr>

                <tr>
                    <td><img src="<?php echo $fotobarang1[ 'gambar']; ?>"></td>
                    <td><b><?php echo $daftarbeli1['namaproduk']; ?></b> <br>
                        <?php echo number_format($daftarbeli1['harga'],2); ?>
                    </td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <?php echo $daftarbeli1['jumlah']; ?>
                    </td>
                    <td>
                        <?php echo number_format($daftarbeli1['subtotal'],2); ?>
                    </td>
                    <td><a href="pesanan.php?idpesanproduk=<?php echo $daftarbeli1['idpesanproduk'] ?>&&proses=hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>

                <?php
                        $totalakhir+=$daftarbeli1['subtotal']; }
                    ?>
                    <tr>
                        <th>SUB TOTAL</th>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                        <th> </th>
                        <th><b><?php echo number_format($totalakhir,2); ?></b></th>
                        <th> </th>
                    </tr>

            </table>

            <br/><br/>
            <div class="keranjang1">
                <p> <b>Total Keranjang Belanja</b>
                    <p>

                        <table class="table4">
                            <tr>
                                <td><b>Total</b></td>
                                <td><b><?php echo number_format($totalakhir,2); ?></b></td>
                            </tr>
                        </table>
                        <br/>
                        <a href="order.php?iduser=<?php echo $pecah['iduser']; ?>" class="btn btn-success btn-md">Selesai Belanja ></a>

            </div>
            </br>
            </br>
            </br>

        </div>
    </div>

</body>

</html>