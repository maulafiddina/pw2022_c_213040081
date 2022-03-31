<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "213040081",
		"nama" => "Dzikra maula fiddina",
		"email" => "dzikramf@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "makima.jpg"
	],
	[
		"nama" => "Yudha Keling", 
		"nrp" => "213040077",
		"email" => "Yudha@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "power.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>