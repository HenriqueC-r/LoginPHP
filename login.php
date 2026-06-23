<?php

var_dump($_POST);

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

$sql = "SELECT * FROM usuarios WHERE nome = '$nome'";

$resultado = $conexao->query($sql);

$usuario = $resultado->fetch_assoc();

if ($usuario === null) {
    echo "Usuario ou Senha incorreta";
} else {
    if ($senha == $usuario["senha"]) {
        echo "login realizado";
    } else {
        echo "Usuario ou Senha incorreta";
    }
}


?>