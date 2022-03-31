<?php 
//SUPERGLOBALS
// variable milik php yang bisa kita gunakan
// bentuknya array associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = ["Dzikra"];
// $_GET["email"] = ["dzikramf@gmail.com"];

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"] ;
} else {
    $nama = 'Tidak Diketahui!' ;
}
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="?nama=Gasper">Gasper.</a>
    </li>
    <li>
        <a href="?nama=KingTetsuu">King Tetsuu</a>
    </li>
</ul>