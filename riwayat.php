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


    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }

        thead {
            background-color: #cccddd;
        }
    </style>
</head>

<body>

    <div class="navbar-nav">
        <div class="logo-nav">
            <img id="logodek" src="assets/halodek.svg" alt="halodek" srcset="">
        </div>

        <div class="navbar-item">
            <button class="nav-item">Pesan Tes</button>
            <button class="nav-item">Buat Janji</button>
            <button class="nav-item">Riwayat</button>
        </div>

        <!-- <div class="navbar-login">
            <button class="login-item" onclick="openForm()">Login</button>
        </div> -->
    </div>



    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>NIK</td>
                <td>Tanggal Lahir</td>
                <td>Tanggal Test</td>
                <td>Klinik</td>
            </tr>
        </thead>

        <tr>
            <?php

            include "php/koneksi.php";

            $no = 1;
            $query = mysqli_query($cek, 'SELECT * FROM pesan');

            while ($data = mysqli_fetch_array($query)) {
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['nik'] ?></td>
            <td><?php echo $data['klinik'] ?></td>
            <td><?php echo $data['tgl_tes'] ?></td>
            <td><?php echo $data['tgl_lahir'] ?></td>
        </tr>
    <?php } ?>
    </tr>
    </table>




</body>

</html>