<?php

$mahasiswa = [
    [
        "nama" => "Zidane",
        "npm" => "213040085",
        "email" => "ahmadzidane@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "tutut.jpeg",
        "angka" => "1"
    ],
    [
        "nama" => "Faturrahman",
        "npm" => "213040323",
        "email" => "fatur@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "tutut.jpeg",
        "angka" => "2"
    ],
    [
        "nama" => "Ahmad",
        "email" => "ahmad@gmail.com",
        "jurusan" => "Teknik Kimia",
        "npm" => "2130234234",
        "gambar" => "tutut.jpeg",
        "angka" => "3"
    ],
    [
        "nama" => "Khair",
        "email" => "khairdd@gmail.com",
        "jurusan" => "Teknik kedokteran",
        "npm" => "213453663",
        "gambar" => "tutut.jpeg",
        "angka" => "4"
    ],
    [
        "nama" => "Abdul",
        "email" => "abdla@gmail.com",
        "jurusan" => "Teknik seni",
        "npm" => "21303123",
        "gambar" => "tutut.jpeg",
        "angka" => "5",

    ],
    [
        "nama" => "Jamal",
        "email" => "jamal@gmail.com",
        "jurusan" => "Teknik hukum",
        "npm" => "213034254",
        "gambar" => "tutut.jpeg",
        "angka" => "6"
    ]
];

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiwa</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Mahasiwa</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs) { ?>
                    <tr>
                        <th scope="row"> <?php echo $mhs["angka"]; ?></th>
                        <td>
                            <img src="img/<?php echo $mhs["gambar"]; ?>" height="50" class="rounded-circle">
                        </td>
                        <td><?php echo $mhs["nama"] ?></td>
                        <td>
                            <a href="" class="btn badge bg-warning">Edit</a>
                            <a href="" class="btn badge bg-danger">Delete</a>
                            <a href="kuliah_latihan3.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>" class="btn badge bg-info">Info</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>