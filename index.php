<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>



<body>
 


    <section id="cxprincipal">
        <?php include "php/banner.php" ?>
        <section id="corpo">
            <form action="open.php" method="POST">
                email:<br>
                <input type="email" name="cxemail"><br>
                senha:<br>
                <input type="password" name="cxsenha"><br>
                <input type="submit" value="Entrar">
            </form>
        </section>
        <?php include "php/footer.php" ?>
    </section>

</body>

</html>