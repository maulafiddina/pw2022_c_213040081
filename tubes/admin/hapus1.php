<?php 
require '../functions.php';

if(hapus1($_GET["id"]) > 0); {
    echo "<script>
            alert('data berhasil diHapus!');
            document.location.href = 
            'SMPadmin.php'
            </script>";

}