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
    require_once("carro.php");

    $fusca = new Carro("Fusca 69", 100);
    //$fusca ->modelo = "Fusca 69";
    //$fusca ->velocidade_maxima = 100;

    echo $fusca->get_modelo(), "<br>";
    echo $fusca->get_velocidade(), "KM/H<br>";
    echo var_dump($fusca), "<br>";

    $fusca->acelerar();
    echo var_dump($fusca), "<br>";

    $fusca->freiar();
    echo var_dump($fusca), "<br>";

    ?>
</body>

</html>