<?php 
// array associattive
// array yang key nya ber-asosiasi / berpasangan dengan string

$mahasiswa = [
    [
        "nama" =>    "Sandhika Galih", 
        "npm"  =>    "043040023",
        "email"=>    "sandhikagalih@unpas.ac.id", 
        "jurusan"=> "Teknik Informatika" 
    ],
    [
        "nama" =>    "Doddy Ferdiansyah", 
        "npm"  =>    "033040001",
        "email"=>    "doddy@yahoo.com", 
        "jurusan"=> "Teknik mesin" 
    ],
    [
        "nama" => "Erik", 
        "npm" => "023040123",  
        "email" => "erik@gmail.com",
        "jurusan" => "Teknik Planologi"
    ],

    [
        "nama" => "Anggoro Ari", 
        "npm" => "103040123", 
        "email" => "anggoro@gmail.com",
        "jurusan" => "Teknik Industri" ]
    ];

   // var_dump($mahasiswa)
?>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>Nrp :<?= $mhs["npm"]; ?></li>
    <li>Email: <?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>