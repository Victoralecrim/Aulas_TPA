<?php
ini_set('default_charset', 'utf-8');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow mb-5">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Tela_HubProjeto.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="conteudo" style="position:absolute; margin-top: 10px; margin-left:27%">
        <div class="container-fluid d-flex justify-content-center grid-gap-3">
            <div class="card" style="width: 15rem;">
                <div class="grid gap-3">
                    <div class="p-2 g-col-6">
                        <div class="card-body" style="height: 30vh;">
                            <h5 class="card-title">CalculadoraPHP</h5>
                            <a href="exercicios.php?dir=Calculadora&file=Calculadora" class="card-link">Calculadora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-3">
                <div class="p-2 g-col-6"></div>
            </div>
            <div class="card" style="width: 15rem;">
                <div class="grid gap-3">
                    <div class="p-2 g-col-6">
                        <div class="card-body">
                            <h5 class="card-title text-center">ListaIF</h5>
                            <a href="exercicios.php?dir=ListaIF&file=index" class="card-link" style="margin-left:33%">Index</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-3">
                <div class="p-2 g-col-6"></div>
                <div class="p-2 g-col-6"></div>
            </div>
            <div class="card" style="width: 15rem;">
                <div class="card-body">
                    <h5 class="card-title">PrimeiroProjeto</h5>
                    <a href="exercicios.php?dir=PrimeiroProjeto&file=index" class="card-link">PirmeiroProjeto</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>