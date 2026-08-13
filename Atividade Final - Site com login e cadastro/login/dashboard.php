<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$usuario = htmlspecialchars($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="login-container">

        <img
            src="img/foto.png"
            class="foto-perfil"
            alt="Foto"
        >

        <h1>
            Bem-vindo, <?php echo $usuario; ?>!
        </h1>

        <p>Login realizado com sucesso.</p>

        <a href="logout.php" class="botao-sair">
            Sair
        </a>

    </div>

</body>
</html>