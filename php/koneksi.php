<?php

$cek = mysqli_connect("localhost", "root", "", "db_healthweb");

if ($cek) {
    echo "Database berhasil terkoneksi<br>";
} else {
    echo "Database gagal terkoneksi<br>";
}
