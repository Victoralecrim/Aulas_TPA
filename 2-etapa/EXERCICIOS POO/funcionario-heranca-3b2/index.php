<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .funcionarios {
            border-collapse: collapse;
            width: 300px;
        }

        .funcionarios th {
            padding: 5px;
            background-color: silver;
            border: 1px solid silver;
        }

        .funcionarios td {
            padding: 5px;
            border: 1px solid silver;
        }  

        .funcionarios--right {
            text-align: right;
        }      

    </style>
</head>
<body>
    <?php
        header("Content-Type: text/html; charset=utf-8");

        require_once("gerente.php");
        require_once("operacional.php");

        $funcionarios = array();
        $funcionarios[] = new Operacional("João", 1300);
        $funcionarios[] = new Operacional("Joaquim", 1300);
        $funcionarios[] = new Gerente("Maria", 4000);
        $funcionarios[] = new Gerente("Alice", 4000);

    ?>
    <table class="funcionarios">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Salário</th>
                <th>Salário a Receber</th>
            </tr>
        </thead>
        <tbody>
    <?php
        foreach ($funcionarios as $funcionario) {
    ?>
        <tr>
            <td><?php echo $funcionario->get_nome(); ?></td>
            <td class="funcionarios--right"><?php echo $funcionario->get_salario(); ?></td>
            <td class="funcionarios--right"><?php echo $funcionario->receber_pagamento(); ?></td>
        </tr>
    <?php
        }
    ?>
        </tbody>
    </table>
</body>
</html>