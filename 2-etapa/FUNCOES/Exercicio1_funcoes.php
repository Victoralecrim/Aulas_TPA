<?php
// Questão 1 
ini_set('default_charset','utf-8');
function sum_array($vetor = array([1, 2, 3, 4, 5]))
{
    return $soma = array_sum($vetor);

    echo 'A soma dos valores é: $soma';
}

?>


<?php
// Questao 2 

$number = 2;

function par_impar($number)
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

?>


<?php
// Questao 3

function numerosPares($array)
{
    $pares = array();
    foreach ($array as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;
        }
    }
    return $pares;
}


?>


<?php
//Questao 4

function fatorial_n($number)
{
    if ($number == 0) {
        return 1;
    } else {
        $contador = 1;

        for ($i = 1; $i <= $number; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
}


?>


<?php
//Questao 5

$lista = array("samuel", "Jonathan", "Sameck", "Batista");

function stringsComMaisDe5Caracteres($lista)
{
    $resultado = array();
    foreach ($lista as $string) {
        array_push($lista, "Bernardo", "Marcao");
        print_r($lista);
    }

    return $resultado;
}


?>


<?php
//Questao 6

function array_numbers($numbers)
{
    $maior_numero = $numbers[0];

    foreach ($numbers as $maior_numero) {
        if ($numbers > $maior_numero) {
            $maior_numero = $numbers;
        }
  
    }

    return $maior_numero;
}

$maior_numero = array_numbers(array([1, 2, 3, 4, 5]));
print_r ("O maior número é: " . $maior_numero);


?>