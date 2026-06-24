<?php

$conexao = new mysqli(
    "localhost",
    "root",
    "Wasd1313@",
    "loginphp"
);

if ($conexao->connect_error) {
    die("Erro na conexão");
}

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (nome, senha)
        VALUES ('$nome', '$senha')";

$conexao->query($sql);

header("Location: dashboard.html");
exit;

?>