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
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data gagal di tambahkan!";
  } {
    header("location: halamanadm.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Perawat</title>
  <link rel="stylesheet" href="css/tambah.css">
</head>

<body>
  <div class="container">
    <div class="title">Form Tambah Data</div>
    <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Nama</span>
          <input type="text" name="Nama" placeholder="Masukan Nama Anda..." required>
        </div>
        <div class="input-box">
          <span class="details">NIP</span>
          <input type="text" name="NIP" placeholder="Masukan NIP Anda..." required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="Email" placeholder="Masukan Email Anda..." required>
        </div>
        <div class="input-box">
          <span class="details">NIP</span>
          <input type="text" name="Alamat" placeholder="Masukan Alamat Anda..." required>
        </div>
        <div class="input-box">
          <span class="details">Gambar</span>
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
          <img src="img/nophoto.jpg" width="120" style="display : block;" class="img-preview">
        </div>
      </div>
      <div class="input-group">
        <input type="submit" name="Tambah" value="Tambah Data">
      </div>
    </form>
  </div>
</body>

</html>
<script src="js/script.js"></script>