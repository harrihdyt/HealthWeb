<?php

include 'koneksi.php';

mysqli_select_db($cek, "db_health");

// $nik = $_POST['nik'];
// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT users nik, name, email, tgl_test, tgl_lahir, klinik";
$result = mysqli_query($cek, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

// if (isset($_POST['simpan'])) {
//     $name = $_POST['name'];
//     $nik = $_POST['nik'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
// }


header("Location: http://localhost/healthWeb/home.php");
