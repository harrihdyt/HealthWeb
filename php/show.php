<?php
//mysql_connect("localhost","root","");
include "koneksi.php";
/*mysql_select_db("lat_dbase");*/
$hasil = mysqli_query($cek, "select * from user order by user_id asc "); // diurutkan berdasarkan FirstName dari kecil ke besar
echo "<pre>";
echo "<font size=6 color=magenta><B> Data Pengguna</B></font><br><br>";
echo "<font size=5 color=maroon><b>";
echo "ID Username NIK Phone Email<a href='index.php'>Input
Data</a></b> </font><br>";
echo "<hr width=75% size=4 color=red align=left>";
echo "<font size=5 color=blue>";
