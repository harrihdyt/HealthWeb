<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form

$email = $_POST['email'];
$password = $_POST['password'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$submit = mysqli_query($cek, "SELECT * FROM users WHERE email='$email' AND password='$password'");

// menghitung jumlah data yang ditemukan
$auth = mysqli_num_rows($submit);

if ($auth > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("http://localhost/healthWeb/php/home.php");
} else {
    header("http://localhost/healthWeb/");
}
