<?php
$login = @$_REQUEST['login'];
$senha = @$_REQUEST['senha'];
$enviar = @$_REQUEST['enviar'];

$user = 'Victo';
$password = 'root';

if ($enviar) {

    if ($login == "")
    {
        echo "<script>alert('Por favor, preencha todos os campos!');</script>";
    }
    else 
    {
        if (($login == $usuario && $senha == $password)) 
        {
            session_start();
            $_SESSION['usuario'] = $login;
            $_SESSION['senha'] = $password;
           header("Location: Tela_Inicial.php");
        }
        else 
        {
            echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>HubProjeto</title>
</head>

<body>

    <div class="container-fluid">
        <div
            class="position-absolute top-50 start-50 translate-middle mb-2 shadow-lg p-3 mb-5 bg-body-tertiary rounded border border-dark">
            <div class="p-4 text-primary">
                <form style="width:45vh; height:35vh" method="post">
                    <h1 class="mb-4">Hub do projeto</h1>
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="Nome" name="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Verificar</label>
                    </div>

                    <a href="Tela_Inicial.php?dir=AulasTPA-main&file=Tela_Inicial"
                        style="color: white; text-decoration: none;">
                        <button type="button" class="btn btn-primary">Entrar</button>
                    </a>

                    <a href="Tela_Inicial.php?dir=HUBPROJETO&file=Tela_Inicial"
                        style="color: white; text-decoration: none;">
                        <button type="button" class="btn btn-primary">Registrar</button>
                    </a>

                </form>
            </div>

        </div>
</body>
</html>