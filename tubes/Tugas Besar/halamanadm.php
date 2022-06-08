<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$perawat = query("SELECT * FROM Perawat");
if (isset($_POST['cari'])) {
  $perawat = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin Klinik 24</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Halaman Admin Klinik 24</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrasi.php">Tambah Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah Data</a>
          </li>

          <form action="" method="POST">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="keyword" size="30" placeholder="Masukan Keyword Pencarian..." autocomplete="off">
              <button class="btn btn-secondary" type="submit" name="cari">Cari!</button>
            </div>
          </form>
      </div>
    </div>
  </nav>
  <div class="container pt-5 pd-5">
    <h2 class="text-center">Daftar Dokter Dan Perawat</h2>
    <br>
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>No.</th>
          <th>Aksi</th>
          <th>Gambar</th>
          <th>Nama</th>
        </tr>
      </thead>

      <?php if (empty($perawat)) : ?>
        <tr>
          <td colspan="4">
            <p>Data Perawat Tidak Ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>
      <?php $i = 1;
      foreach ($perawat as $p) : ?>
        <tbody>
          <tr>
            <td><?= $i++; ?></td>
            <td>
              <a href="detail.php?id=<?= $p['ID']; ?>" button class="btn btn-dark">Lihat Detail</a>
            </td>
            <td><img src=" img/<?= $p['Gambar']; ?>" width="130">
            </td>
            <td><?= $p['Nama']; ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<script src="js/script.js"></script>

</html>