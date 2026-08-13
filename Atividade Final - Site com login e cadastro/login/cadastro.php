<?php
session_start();

$erro = $_SESSION["erro_cadastro"] ?? "";
$sucesso = $_SESSION["sucesso_cadastro"] ?? "";

unset($_SESSION["erro_cadastro"]);
unset($_SESSION["sucesso_cadastro"]);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="login-container">

    <img src="img/foto.png" class="foto-perfil" alt="Foto">

    <h1>Criar conta</h1>

    <?php if (!empty($erro)): ?>
        <p class="erro">
            <?php echo htmlspecialchars($erro); ?>
        </p>
    <?php endif; ?>

    <?php if (!empty($sucesso)): ?>
        <p>
            <?php echo htmlspecialchars($sucesso); ?>
        </p>
    <?php endif; ?>

    <form action="registrar.php" method="POST">

        <div class="campo">
            <label for="usuario">Usuário</label>

            <input
                type="text"
                id="usuario"
                name="usuario"
                placeholder="Escolha um usuário"
                required
            >
        </div>

        <div class="campo">
            <label for="senha">Senha</label>

            <input
                type="password"
                id="senha"
                name="senha"
                placeholder="Escolha uma senha"
                required
            >
        </div>

        <button type="submit">
            Registrar
        </button>

    </form>

    <br>

    <a href="index.php">
        Já tenho uma conta
    </a>

</div>

</body>
</html>