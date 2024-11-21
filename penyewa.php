<?php
include "koneksi.php";
?>
<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

    

<div class="container">

    <h1 class="text-center mt-3">data penyewa</h1>
    <table class="table mt-4">
    <tr>
      <td>No</td>
      <td>Nama Lengkap</td>
      <td >No Identitas</td>
      <td >No Hp</td>
      <td >Jenis Kamar</td>
      <td >Check In</td>
      <td >Check Out</td>
      <td >Jumlah</td>
      <td >Total</td>
    </tr>
  </thead>

    <?php
    $sql = "SELECT tbl_penyewa.nama, tbl_penyewa.no_identitas, tbl_penyewa.no_hp, tbl_jenis_kamar.jenis_kamar, tbl_jenis_kamar.harga, tbl_penyewa.cekin, tbl_penyewa.cekout, tbl_penyewa.jumlah, tbl_penyewa.total FROM tbl_penyewa INNER JOIN tbl_jenis_kamar ON tbl_jenis_kamar.id_kamar = tbl_penyewa.id_kamar";
    $hasil = $db_hotel->query($sql);
    $no = 1;

    foreach($hasil as $row){
    ?>
    <tr>    
      <td><?php echo $no++?></td>
      <td><?php echo $row['nama'];?></td>
      <td><?php echo $row['no_identitas'];?></td>
      <td><?php echo $row['no_hp'];?></td>
      <td><?php echo $row['jenis_kamar'];?></td>
      <td><?php echo $row['cekin'];?></td>
      <td><?php echo $row['cekout'];?></td>
      <td><?php echo $row['jumlah'];?></td>
      <td><?php echo number_format($row['total']);?></td>

     
   
      </tr>
      





    <?php
    }
    ?>

</table></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    