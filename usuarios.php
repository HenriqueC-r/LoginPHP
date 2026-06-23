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

$sql = "SELECT * FROM usuarios";
$resultado = $conexao->query($sql);

$usuarios = [];

while ($usuario = $resultado->fetch_assoc()) {
    $usuarios[] = $usuario;
}

header("Content-Type: application/json");

echo json_encode($usuarios);

$conexao->close();

?>