<?php
 include "koneksi.php";

 $id = $_GET ['id_kamar'];

 $sql = "select * from tbl_jenis_kamar where id_kamar=$id";

 $hasil = mysqli_query($db_hotel, $sql);
 $data =mysqli_fetch_assoc($hasil);

 
?>


<?php
include "header.php";
?>

<div class="container">
    <br><br>
    <h1 class=" text-center ">UBAH DATA</h1>
    <br><br>

<form action="proseseditkamar.php" method="post">
    <input type="hidden" name="id_kamar"value="<?php echo $data ['id_kamar']?>">
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" value="<?php echo $data ['jenis_kamar']?>" placeholder="name@example.com" name="jenis_kamar">
  <label for="floatingInput">jeniskamar</label>
</div>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" value="<?php echo $data ['harga']?>" placeholder="name@example.com" name="harga">
  <label for="floatingInput">harga</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword"value="<?php echo $data ['keterangan']?>" placeholder="Password" name="keterangan">
  <label for="floatingPassword">keterangan</label>
</div>
<br>

<div class="d-grid mt-5"><button type="submit" class="btn btn-warning rounded-5 pt-2 pb-2" name="tambah">ubahh</button></div>
</form>

  