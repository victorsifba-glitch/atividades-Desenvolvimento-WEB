<?php
require_once 'conexao.php';

$links = $pdo->query("SELECT * FROM linksPrincipais")->fetchAll(PDO::FETCH_ASSOC);
$redes = $pdo->query("SELECT * FROM redesSociais")->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(["links" => $links, "redes" => $redes]);