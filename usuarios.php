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

while ($usuario = $resultado->fetch_assoc()) {
    echo $usuario["id"] . " - ";
    echo $usuario["nome"] . "<br>";
}


?>