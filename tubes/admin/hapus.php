<?php 
require '../functions.php';

if(hapus($_GET["id"]) > 0); {
    echo "<script>
            alert('data berhasil diHapus!');
            document.location.href = 
            'SDadmin.php'
            </script>";

}