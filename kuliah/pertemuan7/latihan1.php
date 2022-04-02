<?php 
// $_GET
$mahasiswa = [
    [
        "#" => "1",
        "nama" => "Daffa Arkantaqqy", 
        "npm" => "213040113", 
        "jurusan" => "Teknik Informatika",
        "email" => "daffaarkantaqqy@gmail.com",
        "gambar" => "111.jpg"
    ],
    [
        "#" => "2",
        "nama" => "Ridwan Hidayat", 
        "npm" => "213080111", 
        "email" => "bowzz25@gmail.com", 
        "jurusan" => "Teknik Pertambangan",
        "gambar" => "112.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
           &nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>
           &jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"]; ?>">
           <?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>

</body>
</html>