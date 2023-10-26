<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_MatchUP";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $esporte = $_POST["esportes"];
    $posicaoFav = $_POST["posicao-favorita"];
    $altura = $_POST["altura"];
    $desc_estiloJogo = $_POST["estilo-jogo"];

    $sql = "INSERT INTO cadastroJogador2 (esporte, posicaoFav, altura, desc_estiloJogo) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssds", $esporte, $posicaoFav, $altura, $desc_estiloJogo);

    if ($stmt->execute()) {
        echo "Inserção bem-sucedida";
    } else {
        echo "Erro na inserção: " . $conn->error;
    }

    $conn->close();
}
?>
