<?php
    //VARIÁVEIS E OPERADORES
    /* 1- Crie um código em PHP que exiba a seguinte saída

    Olá <<nome_aluno>>, estamos felizes com o seu retorno.
    Sua nota final da 2ª ETAPA é <<media_etapa2>>

    a- Crie uma variável com seu nome e mostre-a, com o comando "echo", concatenada no meio da frase.
    b- Crie variáveis para armazenar duas notas e uma média. Exiba somente a média na tela. Insira valores fictícios de sua preferência.
    */
    $nome_aluno = "Alecrim";
    echo "Ola " .$nome_aluno . " estamos Felizes com o seu retorno";

    echo "<br>";

   //ESTRUTURAS DE CONTROLE
    /* 2- Utilizando a estruturas de controle adequada, exiba uma mensagem de acordo com a condição de sua média.
    a- Se a média for MAIOR ou IGUAL a 7, exiba a palavra "EXCELENTE".
    b- Se a média for MAIOR que 5, exiba a palavra "BOM".
    c- Se a média for MENOR ou IGUAL 5, exiba a palavra "PRECISA MELHORAR".
    */
    $nota1 = 5;
    $nota2 = 7;
    $media = ($nota1 + $nota2)/2;
    echo "<br>";
    echo "A media foi: " .$media;

    echo "<br>";
    // Letra A 
    if ($media >= 7){
        echo "Excelente";
    }
    //Letra B
    else if($media > 5){
        echo "Bom";
    }
    //LETRA C
    else{
        echo "Precisa melhorar";
    }

    echo "<br>";

   
    /* 3- Utilizando a estrutura de controle adequada, exiba as cores do time de acordo com o seu respectivo nome.
    a- Caso o time seja CAM, exiba o texto "PRETO e BRANCO".
    b- Caso o time seja CRU, exiba o texto "AZUL e BRANCO".
    c- Caso o time seja AMG, exiba o texto "VERDE E PRETO".
    */ 

    $time = "CAM";

    echo "<br>";
    echo "<p/>" .$time;

    switch($time){
        case "CAM":
            echo "<p>PRETO E BRANCO";
        break;
        case "CRU":
            echo "<p>AZUL E BRANCO";
        break;
        default:
            echo "<p>VERDE E PRETO";

    }

    echo "<br>";
    echo "<br>";

    //ESTRUTURAS DE REPETIÇÃO
    /* 4- Utilizando uma estrutura de repetição, exiba em tela 5 nomes de colegas.
    a- Crie um array com os 5 nomes.
    b- Utilizando FOREACH exiba todos os nomes.
    c- Em outra linha, exiba somente o terceira nome.
    */ 

    //LETRA A 
    $array_nomes = [ "Rodrigo", "Bernardo Cabral", "Arthur Guerra", "Victor Alecrim", "Michelle"];

    //LETRA B
    foreach($array_nomes as $nomes){
        echo "$nomes <br>";
    }

    echo "<br>";

    //LETRA C 
    echo($array_nomes[3]);

    echo "<br>";
    echo "<br>";

    /* 5- Utilizando uma estrutura de repetição, exiba em tela as notas de 5 alunos.
    a- Crie um array com 5 notas de alunos.
    b- Utilizando FOREACH exiba as notas em tela.
    */

    $notas = ["Rodrigo" => 2, "Bernardo Cabral" => 0, "Arthur Guerra" => 7, "Victor Alecrim" => 9, "Michelle" => 9];
    
    foreach($notas as $nota_alunos => $valores){
        echo "$nota_alunos = $valores <br>";
    }
