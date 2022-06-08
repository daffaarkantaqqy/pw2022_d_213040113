<?php
function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2022_d_213040113') or die('Koneksi ke DB GAGAL!');

  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or "SELECT * FROM mahasiswa" or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data)
{
  $conn = koneksi();

  if ($_FILES["gambar"]["error"] === 4) {
    $gambar = 'nophoto.jpg';
  } else {
    $gambar = upload();
    if (!$gambar) {
      return false;
    }
  }


  $nama = htmlspecialchars($data["nama"]);
  $npm = htmlspecialchars($data["npm"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  // $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$npm', '$email', '$jurusan', '$gambar')";




  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function hapus($id)
{
  $conn = koneksi();

  $mhs = query("SELECT * FROM mahasiswa Where ID = $id")[0];
  if ($mhs["gambar"] !== 'nophoto.jpg') {
    unlink('img/' . $mhs["gambar"]);
  }
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $npm = htmlspecialchars($data["npm"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET
              nama = '$nama',
              npm = '$npm',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function upload()
{
  $filename = $_FILES["gambar"]["name"];
  $filesize = $_FILES["gambar"]["size"];
  $filetmpname = $_FILES["gambar"]["tmp_name"];
  $filetype = pathinfo($filename, PATHINFO_EXTENSION);
  $allowedtype = ["jpg", "jpeg", "png"];

  if (!in_array($filetype, $allowedtype)) {
    echo "<script>
              alert('Asupken Gambar Nu Baleg!!!');
            </script>";
    return false;
  }

  if ($filesize > 1000000) {
    echo "<script>
              alert('Ukuran Gambar Terlalu Besar');
            </script>";
    return false;
  }

  $newfilename = uniqid() . $filename;
  move_uploaded_file($filetmpname, 'img/' . $newfilename);
  return $newfilename;
}
