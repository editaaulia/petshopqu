<?php
session_start();
include "config.php";

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

    <!--Membuat Menu Home-->
    <div class="jumbotron text-center" style="height: 100vh;  margin-top: 80px; margin-bottom: 5px;">
        <img src="templates/img/logo.png" width="250" />
        <br>
        <h1 class="display-4"> <b> Selamat Datang </b></h1>
        <p class="lead"><b><?php echo ucwords 
    ($_SESSION['nama_pelanggan']); ?> di website PETSHOPQU </p>
        <p> Dengan aplikasi <b>PETSHOPQU</b> kini kamu bisa belanja produk Makanan Kucing online semudah sentuhan jari saja. Cara beli produk Makanan Kucing online di <b>PETSHOPQU</b> cukup dengan beberapa klik di smartphone-mu dan pesananmu akan diantarkan
            ke rumahmu.</p>
    </div>

    <!--Membuat Menu About-->

    <section id="about">
        <h3 class="sub-heading"> Jenis Kucing</h3>
        <h1 class="heading"> Paling Populer</h1>
        <div id="content">

            <article id="Persia" class="card">
                <h2>Persia </h2>
                <img src="templates/img/persia.jpg" class="featured-image" alt="Appetizer">
                <p>Jenis kucing ini menjadi salah satu ras kucing yang paling populer. Kucing persia memiliki kepala dan dahi yang bulat lebar dan telinga kecil yang ujungnya membulat. Bentuk ekornya pun pendek dan kaki yang pendek. </p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EEDE79" fill-opacity="0.7" d="M0,192L48,202.7C96,213,192,235,288,250.7C384,267,480,277,576,250.7C672,224,768,160,864,160C960,160,1056,224,1152,234.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </article>

            <article id="Maine Coon" class="card">
                <h2>Maine Coon</h2>
                <img src="templates/img/mainecoon.jpg" class="featured-image" alt="Main Course">
                <p> Maine Coon merupakan jenis kucing paling besar dari semua jenis Kucing Domestik. Rata-rata berat Kucing Maine Coon mencapai 15 kilogram.Kucing jenis ini memiliki karakteristik bulu yang tebal dan halus, mata besar, dan cakar yang besar.
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EEDE79" fill-opacity="0.7" d="M0,192L48,202.7C96,213,192,235,288,250.7C384,267,480,277,576,250.7C672,224,768,160,864,160C960,160,1056,224,1152,234.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </article>

            <article id="Anggora" class="card">
                <h2>Anggora</h2>
                <img src="templates/img/anggora.jpg" class="featured-image" alt="Dessert">
                <p> Bulu yang lembut, panjang, dan lebat mungkin membuat Anggora sulit dibedakan dari Kucing Persia. Jika Kucing persia berbadan gemuk, lain halnya dengan Kucing Anggora yang cenderung memiliki ukuran bentuk tubuh yang lebih kurus.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EEDE79" fill-opacity="0.7" d="M0,192L48,202.7C96,213,192,235,288,250.7C384,267,480,277,576,250.7C672,224,768,160,864,160C960,160,1056,224,1152,234.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </article>

            <article id="British Shorthair" class="card">
                <h2>British Shorthair</h2>
                <img src="templates/img/british.jpg" class="featured-image" alt="Dessert">
                <p>Kucing British Shorthair adalah jenis kucing yang ideal sebagai hewan peliharaan karena bentuk tubuhnya yang sempurna. Kucing jenis ini memiliki bulu yang khas dan halus, mata yang besar dan kepala yang bulat.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EEDE79" fill-opacity="0.7" d="M0,192L48,202.7C96,213,192,235,288,250.7C384,267,480,277,576,250.7C672,224,768,160,864,160C960,160,1056,224,1152,234.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </article>

        </div>
    </section>

    <!--Membuat Product Tersedia-->
    <section id="Product">

        <h1 class="heading1"> product<span>tersedia</span> </h1>
        <div class="product1">
            <img src="templates/img/product1.jpg" width="230px" height="210px" alt="WHISKAS">
            <h3>WHISKAS</h3>
            <p>WHISKAS® adalah produk makanan kucing terbaik dan bernutrisi tinggi untuk mendukung kesehatan dan tumbuh kembangnya. WHISKAS® mengerti tentang sifat, kebiasaan, serta kebutuhan kucing sehingga kami menawarkan makanan lezat yang di formulasi
                khusus untuk memberikan kucing anda asupan yang dibutuhkan dengan rasa yang nikmat.
            </p>
            <button type="button" class="btn btn-warning"><b>LIHAT VARIASI KAMI > </b></button>
        </div>

        <div class="product1">
            <img src="templates/img/product3.jpg" width="230px" height="210px" alt="product1">
            <h3>Me-O</h3>
            <p>Meo alias Me-O merupakan merk makanan kucing terbaik dan terkemuka di Indonesia. Kami beritahukan bahwa sebagian besar pemilik kucing peliharaan jenis apapun akan selalu memilih pakan ini untuk hewan kesayangannya. Meo mempunyai kandungan
                gizi lengkap dan aman dikonsumsi setiap hari. </p>
            <button type="button" class="btn btn-warning"><b>LIHAT VARIASI KAMI > </b></button>
        </div>
        </div>

        <div class="product1">
            <img src="templates/img/product2.jpg" width="230px" height="210px" alt="Bolt">
            <h3>Bolt</h3>
            <p>Bolt adalah makanan kucing kering asli buatan Indonesia yang memiliki harga terjangkau tetapi berkualitas. Makanan kucing Bolt terbaik adalah salah satu jenis dry food yang seringkali menjadi penyelamat banyak cat lover di Indonesia terutama
                yang memiliki kucing banyak.</p>
            <button type="button" class="btn btn-warning"><b>LIHAT VARIASI KAMI > </b></button>
        </div>
        </div>
    </section>
    </main>


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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>