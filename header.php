<?php

if (isset($_post ['logout'])){
   session_destroy();
   header('location:login.php');
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
  <body>
  <nav class="navbar navbar-expand-lg bg-dark bg-gradient">
  <div class="container-fluid mb-2">
    <a class="navbar-brand fw-bold text-light" href="#">exproo hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold text-light" aria-current="page" href="beranda.php">beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-light" href="admin.php"> admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-light" href="adminkamar.php">kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold text-light" href="transaksi.php">data hasil</a>
        </li>


          
          
      </ul>
      <h5 class="me-3 fw-bold text-light">selamat datang</h5>

        
        <a class="btn btn btn-outline-secondary fw-bold text-light" href="login.php" type="submit">logout</a>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>