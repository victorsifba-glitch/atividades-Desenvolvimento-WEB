<?php

$host = "localhost";
$banco = "sistema_login";
$usuario = "root";
$senha = "";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");
?>