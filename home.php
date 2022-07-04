<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Konsultasi Kesehatan Terbaik di Indonesia</title>

    <link rel="shortcut icon" href="assets/halodek-favicon.svg" type="image/x-icon">

    <!-- external css -->
    <!-- external css -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/test.css?v=<?php echo time(); ?>">
</head>

<body>

    <div class="navbar-nav">
        <div class="logo-nav">
            <img id="logodek" src="assets/halodek.svg" alt="halodek" srcset="">
        </div>

        <div class="navbar-item">
            <button class="nav-item">Pesan Tes</button>
            <button class="nav-item">Buat Janji</button>
            <a href="riwayat.php" class="btn-riwayat">Riwayat</a>
        </div>

        <!-- <div class="navbar-login">
            <button class="login-item" onclick="openForm()">Login</button>
        </div> -->
    </div>




    <div class="container-form">

        <form action="php/pesan.php" method="POST" class="form-test">
            <label for="" class="label">Nama Lengkap</label>
            <input type="text" name="name" class="input-tes" placeholder="Masukan nama lengkap">
            <br>
            <label for="" class="label">NIK</label>
            <input type="text" name="nik" class="input-tes" placeholder="NIK">
            <br>
            <label for="" class="label">Email</label>
            <input type="text" name="email" class="input-tes" placeholder="Masukan email">
            <br>
            <label for="" class="label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="input-tes" placeholder="">
            <br>
            <label for="" class="label">Tanggal Tes</label>
            <input type="date" name="tgl_test" class="input-tes" placeholder="">
            <br>
            <label for="" class="label">Pilih Klinik</label>
            <select name="klinik" class="input-tes" id="">
                <option value="">Pilih Klinik</option>
                <option value="bumame">BUMAME</option>
                <option value="swabaja">SWAB AJA</option>
                <option value="indopcr">INDO PCR</option>
            </select>
            <br>
            <button name="submit" value="submit" type="submit" class="btn-pesan">Pesan Sekarang</button>


        </form>


        <img class="img-wash" src="assets/Handwashing.gif" alt="">

    </div>




</body>

</html>