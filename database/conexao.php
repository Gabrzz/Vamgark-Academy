<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "vamgarkacademy";

$conexao = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// echo "Conexão com o banco de dados realizada com sucesso!";

?>