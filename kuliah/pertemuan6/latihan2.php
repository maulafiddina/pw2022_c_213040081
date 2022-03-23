<?php 
// $mahasiswa = [
//     ["Dzikra maula", "213040081", "
//     dzikramf@gmail.com", "Teknik Informatika"],
//     ["Yudha", "213040077", "
//     yudha@gmail.com", "Teknik Informatika"]
// ];

// Arrya assocoiative
// Key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Dzikra maula",
        "nrp" => "213040081",
        "email" => "dzikramf@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hog.jpg"
    ],
    [
        "nama" => "Yudha",
        "nrp" => "213040077",
        "email" => "yudha@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "lava.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <tittle>Daftar mahasiswa</tittle>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>