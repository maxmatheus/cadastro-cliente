<?php
include 'db.php';
// Recebe os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];

// Insere os dados na tabela
$sql = "INSERT INTO usuario (nome, cpf, email, telefone, endereco, senha)
VALUES ('$nome', '$cpf', '$email', '$telefone', '$endereco', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario Criado com sucesso!";
    header("Location: index.html");
} else {
    echo "Erro ao cadastrar o usuario: " . $conn->error;
}

$conn->close();
?>
