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

    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $email = $_POST["email"];
    $dataNasc = $_POST["dataNasc"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO cadastroPessoal (nome, apelido, email, data_nasc, senha) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssss", $nome, $apelido, $email, $dataNasc, $senha);

    if ($stmt->execute()) {
        echo "Inserção bem-sucedida";
    } else {
        echo "Erro na inserção: " . $conn->error;
    }

    $conn->close();
}
?>
