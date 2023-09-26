<?php
$host = 'localhost';
$dbname = 'teste_usuario';
$username = '';

try{
    $conexao = new PDO("mysql:host=$host; dbname=$dbname",$username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conected successfully";
} catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}

?>