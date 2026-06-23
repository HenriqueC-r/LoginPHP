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

if ($resultado->num_rows == 0) {
    echo "Nenhum Usuario cadastrado.";
}

while ($usuario = $resultado->fetch_assoc()) {
    echo $usuario["id"] . " - ";
    echo $usuario["nome"] . "<br>";

    echo "<a href='excluir.php?id=" . $usuario["id"] . "'>Excluir</a>";

    echo "<br>";
}  

$conexao->close();

?>