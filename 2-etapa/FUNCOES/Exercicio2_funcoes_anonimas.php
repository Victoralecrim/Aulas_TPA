<?php

// Questao 1

 $return_quadrado = function($number) {
    return $number**2;
 };

 $resultado = $return_quadrado(5);
 echo $resultado;
?>




<?php
//Questao 2

$string = function($texto_string){
    return strtoupper($texto_string);
};

$exibir = $string("deu certo");
echo $exibir;


?>


<?php
ini_set('default_charset', 'utf-8');

// Questao 3

function aplicarOperacao($n1, $n2, $callback){
    $result = $callback($n1,$n2);
    echo "O resultado da operação é: " .$result;

}

$soma = function($num1, $num2){
    return $num1 + $num2;
};


aplicarOperacao(5,3, $soma);

?>


<?php
//Questao 4

function filtrarNumerosPares($array = array(), $callback){
    $numerosPares = array_filter($array, $callback);
    return $numerosPares;
}

$array = [1, 2, 3, 4, 5, 6];
$callback = function($numbers){
    return $numbers % 2 == 0;
};

$resultado = filtrarNumerosPares($array, $callback);
print_r($resultado);


?>