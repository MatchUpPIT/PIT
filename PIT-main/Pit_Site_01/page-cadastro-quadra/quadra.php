<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "seu_servidor_mysql";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "bd_MatchUP";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $esporte = $_POST["esportes"];
    $nomeQuadra = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $horaAbertura = $_POST["horario1"];
    $horaEncerramento = $_POST["horario2"];

    $diasFunc = "";
    if (isset($_POST["domingo"])) {
        $diasFunc .= "Domingo, ";
    }
    if (isset($_POST["segunda"])) {
        $diasFunc .= "Segunda-Feira, ";
    }
    if (isset($_POST["terca"])) {
        $diasFunc .= "Terça-Feira, ";
    }
    if (isset($_POST["quarta"])) {
        $diasFunc .= "Quarta-Feira, ";
    }
    if (isset($_POST["quinta"])) {
        $diasFunc .= "Quinta-Feira, ";
    }
    if (isset($_POST["sexta"])) {
        $diasFunc .= "Sexta-Feira, ";
    }
    if (isset($_POST["sabado"])) {
        $diasFunc .= "Sábado, ";
    }
    $diasFunc = rtrim($diasFunc, ', ');

    $sql = "INSERT INTO cadastroQuadra (esporte, nomeQuadra, endereco, horaAbertura, horaEncerramento, diasFunc) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssssi", $esporte, $nomeQuadra, $endereco, $horaAbertura, $horaEncerramento, $diasFunc);

    if ($stmt->execute()) {
        echo "Inserção bem-sucedida";
    } else {
        echo "Erro na inserção: " . $conn->error;
    }

    $conn->close();
}
?>
