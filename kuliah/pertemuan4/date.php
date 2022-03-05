<?php
    // Date
    // untuk menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-Y");

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    //echo time();
    // mengetahui 100 hari kedepan echo date("d-M-Y", time()+60*60*24*100);
    // mengetahui 100 hari kebelakang echo date("d-M-Y", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo mktime(0,0,0,03,28,2003);
    // echo date("l", mktime(0,0,0,03,28,2003));

    // strtotime
    // echo date ("l", strtotime("28 mar 2003"));
?>