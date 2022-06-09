<?php

function koneksi() {
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_c_213040081') or die ;

    return $conn;
}

function query($query) {
    $conn = koneksi();
    // Query ke tabel mahasiswa
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));;
    //siapkan data $mahasiswa
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    //jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        $gambar = 'default.jpg' ;
    } else {
        //jalankan fungsi upload gambar
        $gambar = upload();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    $nama = htmlspecialchars($data['nama']);
    $npm =  htmlspecialchars($data['npm']);
    $email =  htmlspecialchars($data['email']);
    $jurusan =  htmlspecialchars($data['jurusan']);
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$npm', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // hapus file gambar, kecuali default
    if ($mhs["gambar"] !== 'default.jpg') {
        unlink('img/' . $mhs["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $npm =  htmlspecialchars($data['npm']);
    $email =  htmlspecialchars($data['email']);
    $jurusan =  htmlspecialchars($data['jurusan']);
    $gambar =  htmlspecialchars($data['gambar']);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                npm = '$npm',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function upload() {
    //siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file yg diupload bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script> alert('File Tidak Mendukung!'); </script>" ;

        return false;
    }

    //cek apakah gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script> alert('file terlalu besar'); </script>" ;
        return false;
    }
    //lolos pengecekan
    $newfilename = uniqid() . $filename;

    move_uploaded_file($filetmpname, 'img/'. $filename);

    return $filename;
}