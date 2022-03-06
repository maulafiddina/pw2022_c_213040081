<?php
    //date
    //Untuk menampilan tanggal dengan format tertentu
    echo date("l, d-M-Y");

    //time
    //unix TimeStamp / EPOCH time
    //waktu yang sudah berlalu dari 1 januari 1970
    echo time();

    echo date("d M Y", time()+60*60*24*200);

    //mktime
    //membuat detik sendiri
    //mktime (0,0,0,0,0,0)
    //jam,menit,detik,bulan,tanggal,tahun
    echo date("l", mktime(0,0,0,5,24,2003));

    //strtotime
    echo date("l", strtotime("24 may 2003"));
?>