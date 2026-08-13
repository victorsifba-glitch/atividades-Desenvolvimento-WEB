<?php

session_start();

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: cadastro.php");
    exit;
}

$usuario = trim($_POST["usuario"] ?? "");
$senha = $_POST["senha"] ?? "";

if (empty($usuario) || empty($senha)) {

    $_SESSION["erro_cadastro"] = "Preencha todos os campos.";

    header("Location: cadastro.php");
    exit;
}

/* Verifica se o usuário já existe */

$stmt = $conexao->prepare(
    "SELECT id FROM usuarios WHERE usuario = ?"
);

$stmt->bind_param("s", $usuario);

$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {

    $_SESSION["erro_cadastro"] = "Esse usuário já existe.";

    header("Location: cadastro.php");
    exit;
}

$stmt->close();

/* Cria o hash da senha */

$senhaHash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

/* Insere o novo usuário */

$stmt = $conexao->prepare(
    "INSERT INTO usuarios (usuario, senha)
     VALUES (?, ?)"
);

$stmt->bind_param(
    "ss",
    $usuario,
    $senhaHash
);

if ($stmt->execute()) {

    $_SESSION["sucesso_cadastro"] =
        "Conta criada com sucesso. Faça login.";

    header("Location: index.php");
    exit;

} else {

    $_SESSION["erro_cadastro"] =
        "Erro ao criar a conta.";

    header("Location: cadastro.php");
    exit;
}

?>