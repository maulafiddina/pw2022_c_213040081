<?php
require '../functions.php';

$smp = query("SELECT * FROM smp");

//query sesaui dengan keyword pencarian

if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM smp WHERE nama LIKE '%$keyword%' ";
    $smp = query($query);
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SMP</title>
</head>

<body>
    <div class="nav-bar">
    <nav class="navbar navbar-expand-lg" style="background-color: #005555 ;">
    <div class="container">
      <a class="navbar-brand">
        Sekolah Menengah Pertama
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="tambah1.php">Tambah Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin.html">Kembali</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    </div>

    <div class="container">


        <form action="" method="get" class="mt-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Masukan Judul Buku" autocomplete="off">
                <button class="btn btn-primary" type="submit" name="cari">Cari!</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">link</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($smp as $awal) { ?>
                    <tr>
                        <th scope="row"><?= $i++;?></th>
                        <td>
                            <img src="../images/<?php echo $awal["gambar"]; ?>" height="50">
                        </td>
                        <td><?php echo $awal["nama"] ?></td>
                        <td><?php echo $awal["deskripsi"] ?></td>
                        <td><a href="<?php echo $awal["link"] ?>" class="btn badge bg-warning" target="blank">Pilih</a></td>
                        <td>
                            <a href="ubah1.php?id=<?= $awal["id"]; ?>" class="btn badge bg-primary">Ubah</a>
                            <a href="hapus1.php?id=<?= $awal["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('Yang Beneeerrr');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <div class="container">
        <button class="hidden btn btn-danger mt-3" onclick="window.print()">
        <i class="bi bi-journal-plus">Cetak PDF</i>
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