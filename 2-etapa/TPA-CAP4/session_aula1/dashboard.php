<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    if(!isset($_SESSION['id'])) {
        echo "Sem permissão para acesso a página<br>";
        echo '<a href="index.php">Ir para página inicial</a>';
        exit;
    }
    ?>
    <title>Painel do Usuário</title>
</head>
<body>
    <h2>Painel do Usuário</h2>
    <p>Bem-vindo, usuário!</p>

    <p>Clique para gerar o <a href="gera_pdf.php" target="_blank">Relatorio Mensal</a></p>
    <a href="logout.php">Sair</a>
    
</body>
</html>
