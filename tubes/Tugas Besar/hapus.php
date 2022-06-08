<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];
if (Hapus($id) > 0) {
  echo "<script>
          alert('Data Anda Berhasil Dihapus');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "Data gagal di tambahkan!";
} {
  header("location: halamanadm.php");
}
