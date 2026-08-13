<?php

session_start();

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$usuario = trim($_POST["usuario"] ?? "");
$senha = $_POST["senha"] ?? "";

if (empty($usuario) || empty($senha)) {
    $_SESSION["erro"] = "Preencha todos os campos.";

    header("Location: index.php");
    exit;
}

$stmt = $conexao->prepare(
    "SELECT id, usuario, senha
     FROM usuarios
     WHERE usuario = ?"
);

$stmt->bind_param("s", $usuario);

$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {

    $dados = $resultado->fetch_assoc();

    if (password_verify($senha, $dados["senha"])) {

        $_SESSION["usuario_id"] = $dados["id"];
        $_SESSION["usuario"] = $dados["usuario"];

        header("Location: dashboard.php");
        exit;
    }
}

$_SESSION["erro"] = "Usuário ou senha incorretos.";

header("Location: index.php");
exit;
?>