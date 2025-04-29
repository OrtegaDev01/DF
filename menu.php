<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <?php
    session_start();
    if (  (!isset($_SESSION['email']) == true  ) && (!isset($_SESSION['senha']) == true)) {
        echo "
        <script>
        alert('Acesso restrito!');
        window.location.href = 'index.php';
        </script>
        ";
    };
    ?>
</head>



<body>


    <section id="cxprincipal">
        <?php include "php/banner.php" ?>

        <section id="corpo">
            Aqui é o menu principal!

        </section>
        <?php include "php/footer.php" ?>
    </section>

</body>

</html>