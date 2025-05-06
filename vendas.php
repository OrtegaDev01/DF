<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <?php
    session_start();
    // Lógica com !
    // if ((!isset($_SESSION['email']) == true) &&
    //     (!isset($_SESSION['senha']) == true)
    // ) {
    //     echo "
    //     <script>
    //     alert('Acesso restrito!');
    //     window.location.href = 'index.php';
    //     </script>b
    //     ";
    // };

    // Lógica sem !
    if ((isset($_SESSION["login"])) == false && (isset($_SESSION["senha"])) == false) {
        echo "
        <script>
        alert('Acesso restrito!');
        window.location.href = 'index.php';
        </script>b
        ";
    }
    ?>
</head>



<body>


    <section id="cxprincipal">
        <?php include "php/banner.php" ?>

        <section id="corpo">
        <h1>Venda |Perfil:</h1>
        <?php
         include_once "php/link.php"
        ?>


        </section>
        <?php include "php/footer.php" ?>
    </section>

</body>

</html>