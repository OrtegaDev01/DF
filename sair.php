<?php
session_start();
session_destroy();
echo "
    <script>
        alert('Volte logo,obrigado!');
        window.location.href='index.php';
    </script>

    ";
?>