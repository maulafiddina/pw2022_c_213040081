<?php
$mahasiswa = [
    ["Dzikra", "213040081", "teknik 
    informatika", "dzikramf@gmail.com"],
    ["yudha", "213040077", "teknik 
    informatika", "keling@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar mahasiswa</title>
    </head>
    <body>
        
    <h1>Daftar mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

    </body>
</html>