<?php

function koneksi() {
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die ;

    return $conn;
}

function query($query) {
    $conn = koneksi();
    // Query ke tabel product
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));;
    //siapkan data $product
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
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO sd VALUES (null, '$nama', '$deskripsi', '$link', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambah1($data) {
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
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO smp VALUES (null, '$nama', '$deskripsi', '$link', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function tambah2($data) {
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
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO sma VALUES (null, '$nama', '$deskripsi', '$link', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $dasar = query("SELECT * FROM sd WHERE id = $id")[0];

    // hapus file gambar, kecuali default
    if ($dasar["gambar"] !== 'default.jpg') {
        unlink('../images/' . $dasar["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM sd WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus1($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $awal = query("SELECT * FROM smp WHERE id = $id")[0];

    // hapus file gambar, kecuali default
    if ($awal["gambar"] !== 'default.jpg') {
        unlink('../images/' . $awal["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM smp WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus2($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $akhir = query("SELECT * FROM sma WHERE id = $id")[0];

    // hapus file gambar, kecuali default
    if ($akhir["gambar"] !== 'default.jpg') {
        unlink('../images/' . $akhir["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM sma WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    $gambar =  htmlspecialchars($data['gambar']);

    $query = "UPDATE sd SET
                nama = '$nama',
                deskripsi = '$deskripsi',
                link = '$link',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function ubah1($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    $gambar =  htmlspecialchars($data['gambar']);

    $query = "UPDATE smp SET
                nama = '$nama',
                deskripsi = '$deskripsi',
                link = '$link',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function ubah2($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    $gambar =  htmlspecialchars($data['gambar']);

    $query = "UPDATE sma SET
                nama = '$nama',
                deskripsi = '$deskripsi',
                link = '$link',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function register($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username yang dipilih sudah terdaftar!');
                document.location.href = 'register.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'register.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', 'user')");

    return mysqli_affected_rows($conn);
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../images/' . $namaFileBaru);

	return $namaFileBaru;
}