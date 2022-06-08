<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Admin Berhasil Ditambahkan. Silahkan Login !');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'Admin Gagal Ditambahkan!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/regis.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>
<body>
  <form action="" method="POST" autocomplete="off">
    <div class="registrasi">
      <h2>Form Registrasi Admin</h2>
      <div class="input-group">
        <input type="text" name="username" required>
        <span>Username</span>
      </div>
      <div class="input-group">
        <input type="password" name="password1" required>
        <span>Password</span>
      </div>
      <div class="input-group">
        <input type="password" name="password2" required>
        <span>Konfirmasi Password</span>
      </div>
      <div class="input-group">
        <input type="submit" name="registrasi" value="Registrasi">
      </div>
    </div>
  </form>
</body>

</html>