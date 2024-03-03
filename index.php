<?php
// Verifica se o cookie existe
if(isset($_COOKIE['bloqueador'])) {
    // Se o cookie existe, exibe o conteúdo da página secreta
} else {
    // Se o cookie não existe, exibe erro 404
    header("HTTP/1.0 404 Not Found");
    exit;
}
?><!DOCTYPE html>
<html>
<head>
    <title>Meu Site PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <h1>Bem-vindo ao Meu Site PHP!</h1>
    <p>A hora atual é: <?php echo date('H:i:s'); ?></p>
</div>
 <h1>tem seu acesso liberado</h1>
</body>
</html>

