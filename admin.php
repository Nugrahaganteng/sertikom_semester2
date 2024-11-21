<?php
include "koneksi.php";
?>
<?php
include "header.php";
?>
<div class="container">

    <h1 class="text-center mt-3">dataa admin</h1>
    <a class="btn btn-outline-dark me-3" href="tambahdata.php" type="submit">tambahkan data</a>
  <table class="table mt-5">
  <a>
    <tr>
      <th>nomor</th>
      <th scope="col">nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">id</th>
      <th scope="col">aksi</th>
    </tr>
    <?php
    $sql ="select * from tbl_admin";
    $hasil = $db_hotel->query($sql);
    $no=1;

    foreach($hasil as $row){
    ?>
    <tr>    
      <td><?php echo $no++?></td>
      <td><?php echo $row['nama'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['id_admin'];?></td>

      <td>
        <a class="btn btn-info badge p-2"
        href="ubah.php?id_admin=<?php echo $row['id_admin'];?>"> Edit</a>
        <a class="btn btn-danger badge p-2"
        data-bs-toggle="modal"
        data-bs-target="#modalhapus<?= $no ?>"
        href="hapus.php?id_admin=<?php echo $row['id_admin'];?>"> Delet</a>
    </td>
   
      </tr>



<!-- Modal -->
<div class="modal fade" id="modalhapus<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">hapus apa kagak nihchh</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="hapus.php" method="POST">
        <input type="hidden" name="id_admin" value="<?=$row['id_admin']?>">

      <div class="modal-body">
        apakah you yakin apus nihh ? <P> username:
        <?php echo $row['username'];
        ?></P>
      </div>
      <div class="modal-footer">

               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="btn_hapus">Ya, Hapus</button>

                            </div>
                          </form>
    </div>
  </div>
</div>


    <?php
    }
    ?>

</table></div>
    