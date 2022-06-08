<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}
$id = $_GET['id'];
$p = query("SELECT * FROM Perawat WHERE id = $id");
if (isset($_POST['Ubah'])) {
  if (Ubah($_POST) > 0) {
    echo "<script>
            alert('Data anda berhasil di ubah');
            document.location.href = 'halamanadm.php';
          </script>";
  } else {
    echo "Data gagal di ubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/ubah.css">
  <title>Ubah Data</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $p['ID']; ?>">
    <div class="ubah">
      <h2>Form Ubah Data</h2>
      <div class="input-group">
        <input type="text" name="Nama" autofocus required value="<?= $p['Nama']; ?>">
        <span>Nama</span>
      </div>
      <div class="input-group">
        <input type="text" name="NIP" required value="<?= $p['NIP']; ?>">
        <span>NIP</span>
      </div>
      <div class="input-group">
        <input type="text" name="Email" required value="<?= $p['Email']; ?>">
        <span>Email</span>
      </div>
      <div class="input-group">
        <input type="text" name="Alamat" required value="<?= $p['Alamat']; ?>">
        <span>Alamat</span>
      </div>
      <input type="hidden" name="gambar_lama" value="<?= $p['Gambar']; ?>">
      <div class="input-box">
        <span class="details">Gambar</span>
        <div class="container">
          <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
          <div class="img-box">
            <img src="img/<?= $p['Gambar']; ?>" width="120" style="display : block;" class="img-preview">
          </div>
        </div>
      </div>
      <div class="input-group">
        <input type="submit" name="Ubah" value="Ubah Data">
      </div>
    </div>
  </form>
</body>

</html>
<script src="js/script.js"></script>