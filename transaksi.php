<?php

include "koneksi.php";
session_start();

if(isset($_POST['pesan'])){


  $id_kamar = $_POST['jenis_kamar'];
  $nama = $_POST['nama'];
  $no_identitas = $_POST['no_identitas'];
  $no_hp = $_POST['no_hp'];
  $cekin = $_POST['cekin'];
  $cekout = $_POST['cekout'];
  $jumlah_kamar = $_POST['jumlah'];

  $tanggal_chekin  = new DateTime($cekin);
  $tanggal_chekout = new DateTime($cekout);

  if ($tanggal_chekout <= $tanggal_chekin){
    echo "
    <script> 
        alert('tanggal chekout/chekin sa!ah');
        window.location='transaksi.php'; 
    </script>";
    exit();}

$selisih = $tanggal_chekin->diff($tanggal_chekout);
$jumlahhari = $selisih->days;

$queryharga = "SELECT harga FROM tbl_jenis_kamar WHERE id_kamar = '$id_kamar'";
$result = $db_hotel->query($queryharga);
$rowharga = $result->fetch_assoc();
$hargapermalam = $rowharga['harga'];
$total = $jumlahhari * $hargapermalam * $jumlah_kamar;

$sql = "INSERT INTO tbl_penyewa (id_kamar, nama, cekin, cekout, no_identitas, no_hp, jumlah, total)
        VALUE ('$id_kamar', '$nama', '$cekin', '$cekout', '$no_identitas', '$no_hp', '$jumlah_kamar', '$total')";

if ($db_hotel->query($sql)) {
  echo '<script>alert ("data berhasil ditambahkan");window.location="penyewa.php"</script>';
} else {
  echo "Error: " . $sql . "<br>";
}

$db->close();



}

?>




<style>

.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="geo7.jpeg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>
           <form action="" method="POST">
          <div class="row">
            <div class="col">
          <!-- Email input -->
          <label class="form-label fw-bold" for="form3Example3">NAMA LENGKAP</label>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            placeholder="......" name="nama" />
          </div>
            </div>
            <div class="col">
          <!-- Email input -->
          <label class="form-label fw-bold" for="form3Example3">NO IDENTITAS</label>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            placeholder="......" name="no_identitas" />
          </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
          <!-- Email input -->
          <label class="form-label fw-bold" for="form3Example3">NO HANDPHONE</label>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            placeholder="......" name="no_hp" />
          </div>
            </div>
            <div class="col">
          <!-- Email input -->
          <label class="form-label fw-bold" for="form3Example3">JUMLAH KAMAR</label>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            placeholder="......" name="jumlah" />
          </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
          <!-- Email input -->
          <label class="form-label fw-bold" for="form3Example3">CHECK IN</label>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="date" id="form3Example3" class="form-control form-control-lg"
            placeholder="......" name="cekin" />

          </div>
            </div>
            <div class="col">
          <!-- Email input -->
          <label class="form-label fw-bold" for="form3Example3">CHECK OUT</label>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="date" id="form3Example3" class="form-control form-control-lg"
            placeholder="......" name="cekout" />
          </div>
            </div>
          </div>

          <div class="col mt-3">
    <select class="form-select" name="jenis_kamar">
        <option selected>---Pilah---</option>
        
        <?php 
        $sql = "select * from tbl_jenis_kamar";
        $hasil = mysqli_query($db_hotel, $sql);
        foreach ($hasil as $tampil) {
            echo '<option value="' .$tampil["id_kamar"]. '">
            ' .$tampil["jenis_kamar"]. '/' .number_format($tampil["harga"]). '
            </option>';
        }
        ?>
    </select>
</div>

          
          
        
          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn btn-dark btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="pesan">Login</button>
          </div>

          </form>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-black">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2024 by nugraha algeio.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>