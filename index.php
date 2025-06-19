<?php
include 'db.php';

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clientes</h1>
    <a href="create.php">Cadastrar Novo Cliente</a>
    <br>
    <br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        <?php if ($result->num_rows > 0): while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['telefone'] ?></td>
            <td><?= $row['endereco'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; else: ?>
        <tr><td colspan="5">Nenhum cliente cadastrado.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>