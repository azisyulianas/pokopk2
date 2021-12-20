<?php 
    session_start();
    session_destroy();
    echo 
    "<script>
        alert('Berhasil Keluar')
        window.location.href='index.php';
    </script>"
?>