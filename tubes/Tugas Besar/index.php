<?php
require 'functions.php';
$perawat = query("SELECT * FROM Perawat");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik 24</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Klinik 24</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#daftar">Daftar Dokter dan Perawat</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Login</a>
          </li>
      </div>
    </div>
  </nav>
</body>
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="display-3 text-center" id="tentang">Tentang</h2>
    <p class="text-center">Klinik 24</p>
    <div class="clear-fix pt-5"> <img src="img/klinik24.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum temporibus possimus laboriosam voluptatibus accusamus deserunt ducimus quaerat! Aliquid officiis quasi, modi expedita, tempore ipsa asperiores fugit qui ea sequi deleniti quis quas tempora numquam ab fuga culpa, quaerat molestias eaque?</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil ullam quas debitis asperiores eum aspernatur. Quisquam deleniti maxime aspernatur perferendis, architecto officiis cum eos nihil praesentium. Nostrum iusto molestiae reprehenderit?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatum placeat suscipit earum et quod quia fugit soluta temporibus culpa.</p>
    </div>
  </div>
  <br><br><br><br><br><br><br><br>

  <div class="container-fluid pt-5 pd-5">
    <div class="container text-center">
      <h2 class="display-5 text-center" id="daftar">Daftar Dokter Dan Perawat</h2>
    </div>
    <br><br><br>
  </div>
  <div class="container pt-5 pd-5">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>No.</th>
          <th>Gambar</th>
          <th>Nama</th>
        </tr>
      </thead>
      <?php $i = 1;
      foreach ($perawat as $p) : ?>
        <tbody>
          <tr>
            <td><?= $i++; ?></td>
            </td>
            <td><img src=" img/<?= $p['Gambar']; ?>" width="130">
            </td>
            <td><?= $p['Nama']; ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>

<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, sunt!
    </p>
    <div class="row pb-3">
      <div class="col-md-6">
        <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" />
        <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" />
        <input class="form-control form-control-lg mb-3" type="text" placeholder="No. Phone" />
      </div>
      <div class="col-md-6">
        <textarea class="form-control form-control-lg" rows="5"></textarea>
      </div>
      <div class="col-md-3 mx-auto text-center">
        <button type="button" class="btn btn-danger btn-lg">Kirim Pesan</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>