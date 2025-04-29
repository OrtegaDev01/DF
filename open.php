<?php
session_start();
$email = $_POST['cxemail'];
$senha = $_POST['cxsenha'];

if ($email == 'prof@terra.com' && $senha == "123") {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    echo "
    <script>
        alert('Seja bem vindo');
        window.location.href = 'menu.php';
    </script>
    ";

    // header('location:menu.php');
    // # code...
} else {

    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    echo "
    <script>
        alert('Senha ou email incorretos');
        window.location.href = 'index.php';
    </script>
    ";
    // header('location:index.php');
    # code...
}
