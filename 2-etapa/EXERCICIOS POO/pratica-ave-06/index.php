<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("ave.php");

        $gaviao = new Ave();
        $gaviao->especie = "Pinguim Rei";
        $gaviao->cor = "Marrom";
        $gaviao->velocidade_maxima_voo = 0;
        
        echo var_dump($gaviao);

        $gaviao->decolar();

        echo var_dump($gaviao);

        $gaviao->acelerar();

        echo var_dump($gaviao);

        $gaviao->freiar();

        echo var_dump($gaviao);

        $gaviao->pousar();

        echo var_dump($gaviao);



    ?>
</body>
</html>