<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Página Segura</h4>
<?php
session_start();
echo $_SESSION['usuario'];
echo $nome;
?>    

</body>
</html>
