<?php
session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}

$erro = $_SESSION["erro"] ?? "";
unset($_SESSION["erro"]);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="login-container">

       <img src="img/foto.png" class="foto-perfil" alt="Foto">

        <h1>Login</h1>

        <?php if (!empty($erro)): ?>
            <p class="erro">
                <?php echo htmlspecialchars($erro); ?>
            </p>
        <?php endif; ?>

        <form action="login.php" method="POST">

            <div class="campo">
                <label for="usuario">Usuário</label>

                <input
                    type="text"
                    id="usuario"
                    name="usuario"
                    placeholder="Digite seu usuário"
                    required
                >
            </div>

            <div class="campo">
                <label for="senha">Senha</label>

                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >
            </div>

            <button type="submit">
                Entrar
            </button>
            <br>
            <a href="cadastro.php">
            Criar uma conta
            </a>

        </form>

    </div>

</body>
</html>