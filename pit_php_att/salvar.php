<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    require_once("usuario.php");
    require_once("verificar_login.php");



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "LOGIN FEITO COM SUCESSO";

        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $usuario = new Usuario($email, $data_nasc, $nome, $senha);
        $mensagem = $usuario->salvar();

        // Verificar o login do novo usuário
        //$login = new Login($email, $senha);
        //$loginMensagem = $login->fazerLogin();
    }


    ?>

</body>
</html>