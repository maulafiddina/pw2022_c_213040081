<?php
function greetings($waktu = "Selamat Datang",$nama = "Admin") {
    return "Hallo, $waktu $nama!!";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Function</title>
    </head>
    <body>
        <h1><?= greetings("Siang","Dzikra"); ?></h1>
    </body>
</html>