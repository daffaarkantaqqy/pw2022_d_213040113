<?php
require 'functions.php';
$id = $_GET['id'];
if (hapus($id) > 0) {
  echo "<script>
        alert('data berhasil di hapus!');
        document.location.href = 'kuliah_latihan_1.php';
        </script>";
}
