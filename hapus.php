<?php
include "koneksi.php";

// query string : ?id=1. query string ini akan tersimpan dalam var _GET 

if (isset($_POST['btn_hapus'])) {
    // ambil id dari query string
    $id = $_POST['id_admin']; //1

    // buat query hapus
    $sql = "DELETE FROM tbl_admin WHERE id_admin=$id";
    //eksekusi query hapus
    $hasil = $db_hotel->query($sql);

    // apakah query hapus berhasil?
    if ($hasil) {
        // header('Location: dashboard.php');
        echo "
        <script> 
            alert('Hapus data Sukses !');
            document.location='admin.php'; 
        </script>";
    } else {
        echo "
        <script> 
            alert('Gagal menghapus !');
            document.location='admin.php'; 
        </script>";
    }

} else {
    die("akses dilarang...");
}

?>