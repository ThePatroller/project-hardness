<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $sql = "UPDATE clientes SET nome='$nome', telefone='$telefone', endereco='$endereco' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro: " . $conn->error;
    }
}

$sql = "SELECT * FROM clientes WHERE id=$id";
$result = $conn->query($sql);
$cliente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Cliente</h1>
    <form method="POST">
        Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required><br><br>
        Telefone: <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>" required><br><br>
        Endereço: <input type="text" name="endereco" value="<?= $cliente['endereco'] ?>" required><br><br>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>