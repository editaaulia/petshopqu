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

        <!-- Link My Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

        <!-- Link My CSS -->
        <link rel="stylesheet" href="templates/css/style.css">

        <title>PetShopQu</title>
    </head>

    <body>
    <?php
    $proses = mysqli_real_escape_string($kon, @$_GET['proses']);
    if ($proses == "login") {
        $email = mysqli_real_escape_string($kon, $_POST['username']);
        $password = mysqli_real_escape_string($kon, $_POST['password']);
        $cekakun = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM tb_admin where username='$email' AND password='$password'"));
        $ambil = mysqli_query($kon, "SELECT * FROM tb_pelanggan where username='$email' AND password='$password'");
        $cekakun1 = mysqli_num_rows($ambil);
        if ($cekakun != 0) { // untuk mengecek akun admin
            $_SESSION['username'] = $email;
            $_SESSION['password'] = $password;
            
            echo "<script>alert('Anda Berhasil Login sebagai Administrator'); </script>";
            echo "<script>location='admin/index.php'; </script>";
        } elseif ($cekakun1 != 0) { // untuk mengecek akun member
            $akun = mysqli_fetch_assoc($ambil);
            $_SESSION['username'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['pelanggan'] = $akun;
            echo "<script>alert('Anda Berhasil Login'); </script>";
            echo "<script>location='index.php'; </script>";
        } else {
            echo "<script>alert('Anda Gagal login'); </script>";
        }
    }

  ?>

        <form method="post" action="?proses=login">
            <div class="container">
                <img class="logo" src="templates/img/logo.png">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" name="login" class="btn btn-warning login">Login</button>

            </div>
        </form>

        <footer>
            <div class="footer">
                <img class="logo1" src="templates/img/gundar.png">
                <img class="logo2" src="templates/img/lsp.png">
            </div>
        </footer>
        
    </body>

    </html>

