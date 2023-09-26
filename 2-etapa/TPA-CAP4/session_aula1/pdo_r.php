<?php
session_start();

if(isset($_SESSION['user_id'])) {
    echo "Sem a permissão de acesso a página<br>";
    echo '<a href="index.php">Ir para a pagina inicial</a>';
    exit;
}
require('pdo_con.php');

//Função para LISTAR OS REGISTROS no banco de dados 
function listarRegistros($pdo){
    $sql = "SELECT * FROM usuarios";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//Processar o formulario para inserir um novo registro 

if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    $nome=$_POST["name"];
    $email=$_POST["email"];

    if(inserirRegistro($pdo,$nome,$email)){
        $_SESSION['mensagem'] = 'Registro inserido com sucesso!';
    }
    else{
        $_SESSION['mensagem']= 'Erro ao tentar cadastrar';
    }
}
//Listar registros 
$registros = listarRegistros($pdo);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário CRUD com PHP e MySQL</title>
</head>
<body>
    
    <h1>LENDO REGISTRO - READ</h1>
    <?php if (isset($_SESSION['mensagem'])): ?>
        <p><?php echo $_SESSION['mensagem']; ?></p>
        <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?> 

   <h2>Registros:</h2>
   <ul>
      <?php foreach($resgistros as $registro): ?>
      <li><?php echo $registro['nome']; ?> - <?php echo $registro['nome']; ?></li>
      <?php endforeach; ?>
   </ul>

    <hr>
    <a href="dashboard.php">Dashboard</a><br>
    <a href="logout.php">Sair</a>
</body>
</html>
