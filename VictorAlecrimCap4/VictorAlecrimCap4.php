<pre>
<?php
function CalculaMedia($notatotal){
    $media = $notatotal / 3;
    return $media;
}
echo CalculaMedia(30);
//chamando a função de qualquer parte do programa
echo "<br><br>";

function MostrarResultado($aluno,$notatotal){
    if($notatotal >= 60)
        $mensagem = "$aluno, voce esta aprovado";
    else if ($notatotal >=45)
        $mensagem = "$aluno, voce deve fazer recuperacao";
    else
        $mensagem = "$aluno, voce esta reprovado";

    return $mensagem;
}

//chamando a função
$nome = "Joaquim Pereira";
$nota = 48;
echo MostrarResultado($nome,$nota);

echo "<br><br>";

$n = strlen("Cotemig"); //valor retornado sera 7
echo $n;

echo "<br><br>";

$nome = "Cotemig";
$pos = strpos($nome,"o"); // valor retornado sera 1
echo $pos;

echo "<br><br>";

$nome = "Cotemig";
echo substr($nome,2,4);

echo "<br><br>";

$text = 'teste de substring COTEMIG';
echo strlen($text); //26

echo substr_count($text, 'te');

echo substr_count($text, 'te', 3);

echo substr_count($text, 'te', 4, 4);

echo "<br><br>";

$var = 'ABCDEFGH: /COTEMIG/';
echo "Original: $var<hr />\n";

echo substr_replace($var, 'Tecnico', 0) . "<br />\n";
echo substr_replace($var, 'Tecnico', 0, strlen($var)) . "<br />\n";

echo substr_replace($var, 'Tecnico', 0, 0) . "<br />\n";

echo substr_replace($var, 'Tecnico em Informatica', 10, -1) . "<br />\n";

echo substr_replace($var, 'Tecnico em Informatica', -1, -1) . "<br />\n";

echo substr_replace($var, '', 0, -9) . "<br />\n";

echo "<br><br>";

$nome = "Cotemig";
echo strtoupper($nome); //Cotemig

echo "<br><br>";

    $nomes = array(1=> "Joao", 4=>"Maria", 7=>"Jose");
    echo $nomes[1]; //Joao
    echo $nomes[4]; //Maria
    echo $nomes[7]; //Jose

echo "<br><br>";

$nomes = array("pai"=> "Joao", "mae"=>"Maria", "filho"=>"Jose");
echo $nomes["pai"]; //Joao
echo $nomes["mae"]; //Maria
echo $nomes["filhoS"]; //Jose

echo "<br><br>";

$nomes = array("Joao", "Maria", "Jose");
echo $nomes [0]; //Joao
echo $nomes [1]; //Maria
echo $nomes [2]; //Jose

echo "<br><br>";

$nomes = array("Joao", "Maria", "Jose");
$nome[] = "Madalena";

echo $nomes[3]; //Madalena

print_r($nomes);

echo count($nomes);

echo "<br>";

$vetor = array(10, 81, 92);
list($primeiro, $segundo, $terceiro) = $vetor;
echo $primeiro; // 0
echo $segundo; // 81
echo $terceiro; // 92
 
echo "<br><br>";

$nomes = array("pai"=>"Joao","mae"=>"Maria","filho"=>"Jose");
foreach($nomes as $parentesco => $nome){ 
    echo "Parentesco: $parentesco | Nome: $nome <br>";
}

echo "<br><br>";

print_r($_POST);
?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="paginaDeDestino.php">
  Nome:  <input type="text" name="nome"><br>
  Email: <input type="text" name="email"><br>
  Sexo: <input type="radio" name="sexo" value="M"> Masculino
  <input type="radio" name="sexo" value="F"> Feminino
<br>
  <input type="submit" name="acao" value="Enviar">
</form>

</body>
</html>