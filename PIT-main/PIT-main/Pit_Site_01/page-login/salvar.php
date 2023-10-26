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
