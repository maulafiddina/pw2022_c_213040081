<?php
session_start();
$_SESSION = [];
// session_unset();
// session_destroy();
echo "<script>
alert('Anda Telah Logout');
document.location.href = 'index.html';
</script>";