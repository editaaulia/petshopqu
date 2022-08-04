
<?php 

session_start();
include 'config.php';

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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>PETSHOPQU</title>
</head>

<!--header-->
<?php if(!isset($_SESSION['pelanggan'])){
        echo"<script>alert('Silahkan Login Dahulu'); </script>";
        echo"<script>location='login.php'; </script>";
    }?>

    <?php
        
        $produk=mysqli_query($kon, "SELECT * FROM tb_produk");
        $iduser=$_SESSION['pelanggan']['ID_pelanggan'];
        $ambil=mysqli_query($kon,"SELECT * FROM tb_pelanggan WHERE ID_pelanggan='$idpelanggan'");
        $pecah=mysqli_fetch_array($ambil);
        
        
    ?>

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
                            <a class="nav-link active" aria-current="page" href="index.php">BERANDA</a>
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


    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content margin-top: 100px; ">
            <img src="templates/img/logo.png" width="300" />
            <h3>fresh and <span>organic</span> products for your</h3>
            <p> Dengan aplikasi <b>PETSHOPQU</b> kini kamu bisa belanja produk Makanan Kucing online semudah sentuhan jari saja. Cara beli produk Makanan Kucing online di <b>PETSHOPQU</b> cukup dengan beberapa klik di smartphone-mu dan pesananmu akan diantarkan
                ke rumahmu.</p>
            <a href="#" class="btn1">Shop Now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- cards -->
    <section class="menu">
        <div class="container">
            <div class="content">
                <?php while($key = mysqli_fetch_array($produk)) { ?>
                    <div class="row mx-auto mt-5">
                        <div class="card mr-3 ml-3" style="width: 15rem;">
                            <img src="<?php echo $key['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-light">
                                <h5 class="card-title"><?php echo $key['nama_produk'] ?></h5>
                                <p class="card-text">Rp. <?php echo $key['harga'] ?></p>
                                <hr class="garis" width="100%" align="center">
                                <center><a href="checkout.php?idproduk=<?php echo $key['ID_produk'] ?>&&ID_user=<?php echo $pecah['ID_user']; ?>" class="btn btn-success">Pesan</a></center>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

    <section id="menu1">
        <div id="content">

            <article id="menu1" class="card">
                <img src="templates/img/meo1.webp" class="featured-image" alt="Appetizer">
                <h3>ME-O Adult Gourment 1.3kg</h3>
                <h5>Rp.25.000</h5>
                <p>Makanan Kucing Meo Kitten 1.3kg untuk kucing dibawah umur 1 tahun</p>
                <button type="button" class="btn btn-warning"><b>BELI</b></button>
            </article>

            <article id="menu1" class="card">
                <img src="templates/img/meo2.webp" class="featured-image" alt="Appetizer">
                <h3>ME-O Rasa Seafood Meo Wet Food [400 g] </h3>
                <h5>Rp.25.000</h5>
                <p>Mengandung Taurine, Vitamin E, Omega 3&6 and zinc, dan Protein Cocok untuk semua ras kucing yang sudah dewasa</p>
                <button type="button" class="btn btn-warning"><b>BELI</b></button>
            </article>

            <article id="menu1" class="card">
                <img src="templates/img/meo3.jpg" class="featured-image" alt="Appetizer">
                <h3>ME-O Pouch 80 gr / Wet food </h3>
                <h5>Rp.25.000</h5>
                <p>Untuk kucing 1 tahun ke atas, Diperkaya dengan omega 3 & 6, lemak dan seng untuk mantel yang sehat dan berkilau.</p>
                <button type="button" class="btn btn-warning"><b>BELI</b></button>
            </article>

            <article id="menu1" class="card">
                <img src="templates/img/meo4.jpg" class="featured-image" alt="Appetizer">
                <h3>ME-O Creamy Treats 1 pack isi 4 x 15gr </h3>
                <h5>Rp.25.000</h5>
                <p>Snack Kucing MEO / Cemilan Kucing MEO creamy treat. </p>
                <button type="button" class="btn btn-warning"><b>BELI</b></button>
            </article>

        </div>
    </section>
    <!-- menu section ends -->
    <!-- <footer class="bg-primary text-white text-center p-3"> -->
    <link rel="stylesheet" href="../assets/dist/css/style.css" />
    <div class="text-white footer-bottom p-2" style="background-color: #F5D14B; width:100%; bottom:0px;">
        <div class="container-fluid text-center">
            <p class="mt-2 mb-2">&copy; PETSHOPQU. All Rights Reserved.<br> 2021-
                <?=date('Y')?>
            </p>
        </div>
    </div>
    <!-- <p class="mt-2 mb-2">&copy; EDITA 2021-<?=date('Y')?></p> </footer> -->
</body>

</html>