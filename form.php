<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama= $_POST['nama'];
    $identitas= $_POST['identitas'];
    $nomor = $_POST['handphone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $jumlah = $_POST['jumlah'];


    $sql = "insert into penyewa (nama, no_identitas, no_hape, check_in, check_out, jumlah) values ('$nama','$identitas','$nomor','$checkin','$checkout','$jumlah')";
}
if ($db ->query($sql)) {
    header("location:penyewa.php");
} else {
    echo "data gagal";
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

  </style>
  <body>
    <form action="" method="POST">
  <section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">



              <div data-mdb-input-init class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">nama lengkap</label>
                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="nama"/>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">no identitas</label>
                <input type="text" id="typePasswordX" class="form-control form-control-lg" name="identitas"/>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">no handphone</label>
                <input type="password" id="typeEmailX" class="form-control form-control-lg" nama="handphone"/>
              </div>

              <div class="row">
              <div class="col">
                <input type="date" class="form-control" placeholder="First name" aria-label="First name" name="checkin">
             </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="Last name" aria-label="Last name" name="checkout">
            </div>
            </div>

            <br>
            <select class="form-select" aria-label="Default select example" name="jenis">
            <option selected>PILIH</option>
            <?php
          $sql = "SELECT DISTINCT jenis FROM kamar";
             $result = mysqli_query($db, $sql);
                foreach ($result as $tampil) {
                 echo '<option value= "'.$tampil["jenis"].'">
             ' .$tampil["jenis"]. '
                     </option>';
                }
                ?>
            </select>
            <br>
            <div data-mdb-input-init class="form-outline form-white mb-4">
            <label class="form-label" for="typePasswordX">jumlah kamar</label>
                <input type="text" id="typePasswordX" class="form-control form-control-lg" name="jumlah"/>
              </div>
             <br>
            <br>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" name="simpan">simpan</button>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>