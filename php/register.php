<?php

include 'koneksi.php';

mysqli_select_db($cek, "db_healthweb");

$sql = "INSERT INTO user (username, user_nik, user_phone, user_email, user_password) VALUES ('$_POST[username]', '$_POST[user_nik]', '$_POST[user_phone]', '$_POST[user_email]','$_POST[user_password]')";

$submit = mysqli_query($cek, $sql) or die("<br>Gagal Input Data");

// if (isset($_POST['simpan'])) {
//     $name = $_POST['name'];
//     $nik = $_POST['nik'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
// }

echo " 1 record added <br>";
echo "<a href='show.php'>Lihat Data</a>";
