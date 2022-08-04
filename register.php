<?php 


include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PETSHOPQU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="templates/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form name="formPendaftaran" action="register.php" method="post" onsubmit="return validateForm()">
            <img class="logo1" src="templates/img/logo.png">
            <center>
                <h1>Form Registrasi</h1>
            </center>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_pelanggan" placeholder="nama_pelanggan" class="form-control" required maxlength="40" minlength="3">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" style="min-height: 200px;" required id="alamat_pelanggan" placeholder="Alamat" name="alamat_pelanggan"></textarea>
            </div>
            <div class="form-group ">
                <label>Handphone</label>
                <input type="text " name="no_hp" placeholder="no_hp" class="form-control ">
            </div>
            <div class="form-group ">
                <label>Password</label>
                <input type="password" class="form-control" required id="password" name="password">
            </div>
            <br>
            <button type="submit "  name="submit" class="btn btn-warning  mr-20">Submit</button>
            <button type="submit " class="btn btn-danger text-black-50 mr-20">Batal</button>
            <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
        </form>

        <?php 
        if(isset($_POST["submit"])){
            // Mengambil input dari form dan dimasukan ke variabel
            $nama_pelanggan = $_POST["nama_pelanggan"];
            $email = $_POST["username"];
            $alamat = $_POST["alamat_pelanggan"];
            $no_hp = $_POST["no_hp"];
            $password = $_POST["password"];

            // Mengecek apakah email sudah dipakai apa belum
            $ambil = mysqli_query($kon,"SELECT * FROM tb_pelanggan where username='$email'");
            $emailcocok=mysqli_num_rows($ambil);
            if($emailcocok==1){
                echo"<script>alert('Email anda sudah digunakan'); </script>";
                echo"<script>location='register.php'; </script>";
                return false;
            }

            if($password == $password){
                $insert=mysqli_query($kon,"INSERT INTO tb_pelanggan (username,nama_pelanggan,alamat_pelanggan,no_hp,password)
                VALUES ('$username','$nama_pelanggan','$alamat','$no_hp','$password')");
                echo"<script>alert('Akun Berhasil dibuat');</script>";
                echo"<script>location='login.php';</script>";
            }

            



        }
    
    
    ?>

    </div>
</body>

</html>