<?php 
require '../functions.php';

if(hapus2($_GET["id"]) > 0); {
    echo "<script>
            alert('data berhasil diHapus!');
            document.location.href = 
            'SMAadmin.php'
            </script>";

}