<?php
 include "koneksi.php";

 if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
     $username = $_POST['username'];
     $password = $_POST['password'];

 
     $sql = "insert into tbl_admin (username,password,nama) values ('$username','$password','$nama')";
     if($db_hotel->query($sql)){
      echo "<script>alert ('tambahdata sukses');
      document.location='admin.php'; </script>";
 
 }
 }
?>

<?php
include "header.php";
?>

<div class="container">
    <br><br>
    <h1 class=" text-center ">TAMBAH DATA</h1>
    <br><br>
<form method="post">
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="nama">
  <label for="floatingPassword">name</label>
</div>

    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
</div>
<br>

<div class="d-grid mt-5"><button type="submit" class="btn btn-dark rounded-5 pt-2 pb-2" name="tambah">Tambah Data</button></div>
</form>

  </div>  