<?php 
include "koneksi.php";
if (isset($_POST['tambah'])) {
    $id = $_POST['id_kamar'];
    $nama=$_POST['jenis_kamar'];
    $username = $_POST['harga'];
    $password = $_POST['keterangan'];

    $sql = "UPDATE tbl_jenis_kamar SET jenis_kamar = '$nama' ,harga = '$username', keterangan = '$password' WHERE tbl_jenis_kamar.id_kamar = $id;";

// eksekusi
$hasil = $db_hotel->query($sql);

// validasi
if ($hasil) {
    echo "<script> alert('Ubah Data Berhasil');
      document.location='adminkamar.php';
  </script>;";
}   else {
    echo "<script> alert('Ubah Data gagal');
      document.location='adminkamar.php';
  </script>;";
}
}
?>