<?php

require_once "conexao.php";

$usuario = "victor";
$senha = "123456";
$foto = "perfil.png";

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conexao->prepare(
    "INSERT INTO usuarios (usuario, senha, foto) VALUES (?, ?, ?)"
);

$stmt->bind_param("sss", $usuario, $senhaHash, $foto);

if ($stmt->execute()) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . $stmt->error;
}

$stmt->close();
$conexao->close();

?>