<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $sql = "INSERT INTO clientes (nome, telefone, endereco) VALUES ('$nome', '$telefone', '$endereco')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastrar Novo Cliente</h1>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Telefone: <input type="text" name="telefone" required><br><br>
        Endereço: <input type="text" name="endereco" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>