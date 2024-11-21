<?php
 include "koneksi.php";

 $id = $_GET ['id_admin'];

 $sql = "select* from tbl_admin where id_admin=$id";

 $hasil =$db_hotel->query($sql);
 $data =mysqli_fetch_assoc($hasil);

 
?>


<?php
include "header.php";
?>

<div class="container">
    <br><br>
    <h1 class=" text-center ">UBAH DATA</h1>
    <br><br>

<form action="prosesedit.php" method="post">
    <input type="hidden" name="id_admin" value="<?php echo $data ['id_admin']?>">
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" value="<?php echo $data ['nama']?>" placeholder="name@example.com" name="name">
  <label for="floatingInput">nama</label>
</div>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" value="<?php echo $data ['username']?>" placeholder="name@example.com" name="username">
  <label for="floatingInput">username</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword"value="<?php echo $data ['password']?>" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
</div>
<br>

<div class="d-grid mt-5"><button type="submit" class="btn btn-warning rounded-5 pt-2 pb-2" name="tambah">ubahh</button></div>
</form>

  