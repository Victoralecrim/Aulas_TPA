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
        header("Content-Type: text/html; charset=utf-8");

        require_once("filme-nacional.php");
        $filme_nacional = new FilmeNacional("O Auto da Compadecida", 2000);
        echo $filme_nacional->imprimir_folder();

        echo "<hr>";

        require_once("filme-internacional.php");
        $filme_internacional = new FilmeInternacional(
            "Homem-Aranha: Através do Aranhaverso", 
            2023, 
            "Inglês", 
            array("Português", "Espanhol", "Japonês")
        );

        echo $filme_internacional->imprimir_folder();
    ?>
</body>
</html>