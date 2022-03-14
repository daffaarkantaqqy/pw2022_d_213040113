//pembelajaran kampus
<?php 
//pertemuan 5 - ARRAY
//Array adalah variabel yang dapat menyimpan banyak nilai sekaligus
//mencetak array
//menggunkan index, dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

//menggunakan varr_dump () atau prnt_r()
//hanya untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//mencetak untuk user
//menggunkana loopingfor($i =0 d])

//menggunakan foreach
//pengulangan khusus ARRAY
foreach($bulan as $bln) {
    echo $bln;
    echo "<br>";
}
echo "<hr>";

//memanipulasi array
//menambah 1 elemen di akhir
$hari[]= "jum'at";
$hari[]= "sabtu";
print_r($hari);
echo "<br>";
$bulan[]= "april";
$bulan[]= "mei";
print_r($bulan);
?>
//Latihan

<?php
// array
// variabel yang dapat memiliki banyak data
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>