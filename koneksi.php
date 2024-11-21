<?php
$hostname = "localhost";
// alamat server database MySQL
$username = "root";
// nama pengguna untuk mengakses database. isi nya default
$password = "";
// kata sandi untuk mengakses database.. isi nya default

$database_name = "db_hotel"; 
// nama database yang akan di koneksikan 

// membuat koneksi ke server database MySQL
$db_hotel = mysqli_connect($hostname, $username, $password, $database_name);

// jika db koneksi nya eroe
if ($db_hotel->connect_error){
    echo "Koneksi Gagal !";
    die("error!");
}

// echo "koneksi berhasil";
?>