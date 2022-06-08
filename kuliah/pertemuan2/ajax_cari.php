<?php
require '../functions.php';
$perawat = cari($_GET['keyword']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container pt-5 pd-5">
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
      <tbody>
        <tr>
          <td colspan="4">
            <p>Data Dokter/Perawat Tidak Ditemukan!</p>
          </td>
        </tr>
      </tbody>
    <?php endif; ?>
    <?php $i = 1;
    foreach ($perawat as $p) : ?>
      <tbody>
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <a href="detail.php?id=<?= $p['ID']; ?>">Lihat Detail</a>
          </td>
          <td><img src=" img/<?= $p['Gambar']; ?>" width="70">
          </td>
          <td><?= $p['Nama']; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>