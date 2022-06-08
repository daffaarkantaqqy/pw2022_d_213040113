<?php
session_start();

if (isset($_SESSION['login'])) {
  header("location: halamanadm.php");
  exit;
}
require 'functions.php';

if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
</head>

<body>
  <form action="" method="POST" autocomplete="off">
    <div class="login">
      <h2>Form Login Admin</h2>
      <?php if (isset($login['error'])) : ?>
        <p><?= $login['pesan']; ?></p>
      <?php endif; ?>
      <div class="input-group">
        <input type="text" name="username" required>
        <span>Username</span>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <span>Password</span>
      </div>
      <div class="input-group">
        <input type="submit" name="login" value="Login">
      </div>
      <div class="input-group">
        <a href="index.php">Kembali Ke Halaman Utama</a>
      </div>
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>