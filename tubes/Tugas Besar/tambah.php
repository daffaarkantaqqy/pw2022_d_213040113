<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
if (isset($_POST['Tambah'])) {
  if (Tambah($_POST) > 0) {
    echo "<script>
            alert('Data Anda Berhasil Ditambahkan');
            document.location.href = 'halamanadm.php';
          </script>";
  } else {
    echo "Data gagal di tambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/tambah.css">
  <title>Tambah Data</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="tambah">
      <h2>Form Tambah Data</h2>
      <div class="input-group">
        <input type="text" name="Nama" autofocus required>
        <span>Nama</span>
      </div>
      <div class="input-group">
        <input type="text" name="NIP" required>
        <span>NIP</span>
      </div>
      <div class="input-group">
        <input type="text" name="Email" required>
        <span>Email</span>
      </div>
      <div class="input-group">
        <input type="text" name="Alamat" required>
        <span>Alamat</span>
      </div>
      <div class="input-box">
        <span class="details">Gambar</span>
        <div class="container">
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
        <div class="img-box">
          <img src="img/nophoto.jpg" width="120" style="display : block;" class="img-preview">
        </div>
      </div>
      <div class="input-group">
        <input type="submit" name="Tambah" value="Tambah">
      </div>
    </div>
  </form>
</body>

</html>
<script src="js/script.js"></script>