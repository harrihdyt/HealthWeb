<?php

include 'koneksi.php';

mysqli_select_db($cek, "db_health");

// $nik = $_POST['nik'];
// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (nik, name, email, password) VALUES ('$_POST[nik]', '$_POST[name]', '$_POST[email]', '$_POST[password]')";

$submit = mysqli_query($cek, $sql) or die("<br>Gagal Input Data");

// if (isset($_POST['simpan'])) {
//     $name = $_POST['name'];
//     $nik = $_POST['nik'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
// }


header("Location: http://localhost/healthWeb/home.php");
