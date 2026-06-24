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

$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id = $id";

$conexao->query($sql);

header("Location: dashboard.html");
exit;

?>