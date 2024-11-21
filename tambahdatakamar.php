<?php
 include "koneksi.php";

 if (isset($_POST['tambah'])) {
    $jeniskamar = $_POST['jenis_kamar'];
     $harga = $_POST['harga'];
     $keterangan = $_POST['keterangan'];

 
     $sql = "insert into tbl_jenis_kamar (jenis_kamar,harga,keterangan) values ('$jeniskamar','$harga','$keterangan')";
     if($db_hotel->query($sql)){
      echo "<script>alert ('tambahdata sukses');
      document.location='adminkamar.php'; </script>";
 
 }
 }
?>

<?php
include "header.php";
?>

<div class="container">
    <br><br>
    <h1 class=" text-center ">TAMBAH DATA kamarr</h1>
    <br><br>
<form method="POST">
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="jenis_kamar">
  <label for="floatingPassword">jenis kamar</label>
</div>

    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="harga">
  <label for="floatingInput">harga</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="keterangan">
  <label for="floatingPassword">keterangan</label>
</div>
<br>

<div class="d-grid mt-5"><button type="submit" class="btn btn-dark rounded-5 pt-2 pb-2" name="tambah">Tambah Data</button></div>
</form>

  </div>  