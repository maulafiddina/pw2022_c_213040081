<?php
// pertemuan 5 array
// array adalah variable uang bisa menampung banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

$mahasiswa1 = "dzikra";

//membuat ARRAY
$hari = ["senin","selasa","rabu","kamis"]; //baru
$bulan = array("januari","februari","maret"); //lama
$myArr = [10, "dzikra", true];

// mencetak array
// mencetak 1 elemen di dalam array, menggunakan index
// dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArr[0];
echo "<hr>";

// mencetak var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak semua array menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}

echo "<hr>";

// foreach
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

// memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari[] = "jumat";
$hari[] = "sabtu";
print_r($hari);

?>