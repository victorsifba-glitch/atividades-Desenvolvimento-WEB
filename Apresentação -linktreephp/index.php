<?php
require_once 'conexao.php';

try {
    $stmt = $pdo->query("SELECT * FROM links_principais");
    $linksPrincipais = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmtRedes = $pdo->query("SELECT * FROM redes_sociais");
    $redesSociais = $stmtRedes->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar dados do banco: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Linktree</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="container-foto">
            <img src="foto.jpg" alt="Foto de perfil" class="foto">
        </div>
        <h1>Victor Santos Silva</h1>
        <p class="descricao">
            Aluno do IFBA<br>Campus Jacobina.
        </p>
        
        <div id="main-links">
            <?php foreach ($linksPrincipais as $link): ?>
                <a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener noreferrer">
                    <?= htmlspecialchars($link['label']) ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div id="social-links" class="redes">
            <?php foreach ($redesSociais as $rede): ?>
                <a href="<?= htmlspecialchars($rede['url']) ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?= htmlspecialchars($rede['img']) ?>" alt="<?= htmlspecialchars($rede['nome']) ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>