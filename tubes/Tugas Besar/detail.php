<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];
$p = query("SELECT * FROM Perawat WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Detail Perawat</title>

</head>

<body>
  <h3>Detail Perawat</h3>
  <ul>
    <li><img src="img/<?= $p['Gambar']; ?>" width="250"></li>
    <li>NIP : <?= $p['NIP']; ?></li>
    <li>Nama : <?= $p['Nama']; ?></li>
    <li>Email : <?= $p['Email']; ?></li>
    <li>Alamat : <?= $p['Alamat']; ?></li>
    <li><a href="ubah.php?id=<?= $p['ID']; ?>" class="btn btn-dark mb-2 mt-2">Ubah</a> | <a href="hapus.php?id=<?= $p['ID']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');" class="btn btn-dark mb-2 mt-2">Hapus</a></li>
    <li><a href="halamanadm.php" class="btn btn-dark">Kembali ke daftar perawat</a></li>
  </ul>
</body>

</html>