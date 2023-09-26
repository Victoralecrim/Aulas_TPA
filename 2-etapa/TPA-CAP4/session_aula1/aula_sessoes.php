<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$nome = 'Victor';
$_SESSION['victor'] = $nome;
echo "Oi usuário " . $nome . " Seja bem vindo!<br>";
echo '<a href="aula_sessoes_segura.php">Ir para página segura</a>';
?>
</body>
</html>
