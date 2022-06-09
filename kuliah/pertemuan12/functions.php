<?php

function koneksi() {
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_c_213040081') or die ;

    return $conn;
}

function query($query) {
    $conn = koneksi();
    // Query ke tabel mahasiswa
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    //siapkan data $mahasiswa
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $npm =  htmlspecialchars($data['npm']);
    $email =  htmlspecialchars($data['email']);
    $jurusan =  htmlspecialchars($data['jurusan']);
    $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$npm', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
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