<?php
require 'functions.php';

// query mahasiswa berdasarkan ID
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa where id = $id")[0];

//cek ketika tombol tambah di klik
if(isset($_POST['ubah'])) {
 
    if(ubah($_POST) > 0); {
        echo "<script>
                alert('data berhasil diUbah!');
                document.location.href = 
                'index.php'
                </script>";

    }

}
?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Mahasiwa</title>
</head>

<body>
    <div class="container">
        <h1>Form Ubah Data Mahasiwa</h1>

        <a href="index.php">Kembali Ke Daftar Mahasiswa</a>

        <div class="row mt-3">
            <div class="col-8">

            <form action="" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

            <div class="mb-3">
                <label for="nama" class="from-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mhs["nama"]; ?>">
            </div>

            <div class="mb-3">
                <label for="npm" class="from-label">NPM</label>
                <input type="number" class="form-control" id="npm" name="npm" required value="<?= $mhs["npm"]; ?>" style="width: 120px;">
            </div>

            <div class="mb-3">
                <label for="email" class="from-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required value="<?= $mhs["email"]; ?>">
            </div>

            <div class="mb-3">
                <label for="jurusan" class="from-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </div>

            <div class="mb-3">
                <label for="gambar" class="from-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>

            </form>


            </div>
        </div>


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