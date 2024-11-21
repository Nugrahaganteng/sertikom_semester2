<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {
    $username=$_POST['username'];
    $passwordusername=$_POST['password'];
    $sql= "select * FROM tbl_admin where username='$username' and password='$passwordusername'";

$result = mysqli_query($db_hotel,$sql);

$data = $result->fetch_assoc();

if (mysqli_num_rows($result) > 0) {
    header("location:admin.php");
}
else {
$login_messagae = "akun tidak ada";
echo 'password yang anda tulis salah';
}

}
if (isset($_SESSION["error_smgg"])) {
  echo $_SESSION["error_smgg"];
  $_SESSION["error_smgg"] = '';
} else {
  echo 'belum ke isi';
}

?>