<?php 
//Repersentasi Data Mahasiswa 

$mahasiswa = [
    ["Daffa Arkantaqqy ", "213040113", "daffaarkantaqqy@gmail.com", "Teknik Informatika"],
    ["Ucok", "213040112", "ucok@gmail.com", "Teknik Industri"],
    ["Ridwan Hidayt", "213040120", "ridwanhidayt@gmail.com", "Teknik Mesin"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>Npm : <?php echo $mhs [1]; ?><</li>
        <li>Email : <?php echo $mhs [2]; ?></li>
        <li>Email : <?php echo $mhs [3]; ?></li>
    </ul>
<?php } ?>
</body>
</html>
