<?php 
//done broww
include "koneksi.php";
if (isset($_POST['tambah'])) {
    $id = $_POST['id_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "UPDATE `tbl_admin` SET `nama` = '$name', `username` = '$username', `password` = '$password' WHERE `tbl_admin`.`id_admin` =$id";

// eksekusi
$hasil = $db_hotel->query($sql);

// validasi
if ($hasil) {
    echo "<script>alert ('ubahdata sukses');
    document.location='admin.php'; </script>";
}   else {
    echo "Data Gagal";
}
}
?>