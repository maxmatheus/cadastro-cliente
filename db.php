<?php
// Conexão com o banco de dados
$server = "localhost:3308";
$user = "root";
$password = "12345678";
$database = "aula";

$conn = new mysqli($server, $user, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
