<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'rumahsakit_unpas');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['Gambar']['name'];
  $tipe_file = $_FILES['Gambar']['type'];
  $ukuran_File = $_FILES['Gambar']['size'];
  $error = $_FILES['Gambar']['error'];
  $tmp_file = $_FILES['Gambar']['tmp_name'];

  if ($error == 4) {
    return 'nophoto.jpg';
  }

  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('Yang Anda Pilih Bukan Gambar!');
          </script>";
    return false;
  }
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
    alert('Yang Anda Pilih Bukan Gambar!');
          </script>";
    return false;
  }
  if ($ukuran_File > 5000000) {
    echo "<script>
    alert('Ukuran Terlalu Besar!');
          </script>";
    return false;
  }
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['Nama']);
  $nip = htmlspecialchars($data['NIP']);
  $email = htmlspecialchars($data['Email']);
  $alamat = htmlspecialchars($data['Alamat']);
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO
              Perawat
            VALUES
            (null,'$nama', '$nip', '$email', '$alamat', '$gambar');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  $prw = query("SELECT * FROM Perawat WHERE ID = $id");
  if ($prw['Gambar'] != 'nophoto.jpg') {
    unlink('img/' . $prw['gambar']);
  }

  mysqli_query($conn, "DELETE FROM Perawat WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['Nama']);
  $nip = htmlspecialchars($data['NIP']);
  $email = htmlspecialchars($data['Email']);
  $alamat = htmlspecialchars($data['Alamat']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nophoto.jpg') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE Perawat SET 
              Nama = '$nama',
              NIP = '$nip',
              Email = '$email',
              Alamat = '$alamat',
              Gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM Perawat
              WHERE Nama LIKE '%$keyword%' OR
              NIP LIKE '%$keyword%' OR
              Alamat LIKE '%$keyword%'
              ";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);


  if ($user = query("SELECT * FROM user WHERE Username = '$username'")) {
    if (password_verify($password, $user['Password'])) {
      $_SESSION['login'] = true;

      header("Location: halamanadm.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Anda Salah!'
  ];
}

function registrasi($data)
{
  $conn = Koneksi();
  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username / Password Tidak Boleh Kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }
  if (query("SELECT * FROM User WHERE Username = '$username'")) {
    echo "<script>
            alert('Username Sudah Terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Password Tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  $query = "INSERT INTO User
              VALUES 
              (null, '$username', '$password_baru')
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
