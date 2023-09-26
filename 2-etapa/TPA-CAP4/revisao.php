<?php
// ==================== POO ===================== //
// *POO* OBJETO PESSOA
class Pessoa {
    // Propriedades
    public $nome;
    public $idade;
    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    // Método
    public function saudacao() {
        return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}
// Criar objetos
$pessoa1 = new Pessoa("João", 30);
$pessoa2 = new Pessoa("Maria", 25);
// Acessar propriedades e métodos
echo $pessoa1->saudacao(); // Imprime: "Olá, meu nome é João e tenho 30 anos."
echo "<br>";
echo $pessoa2->saudacao(); // Imprime: "Olá, meu nome é Maria e tenho 25 anos."
echo "<br>";

// *POO* OBJETO Carro
class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    private $ano;

    // Construtor
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Método para obter o ano
    public function obterAno() {
        return $this->ano;
    }
}

// Criar objetos
$carro1 = new Carro("Toyota", "Corolla", 2022);
$carro2 = new Carro("Ford", "Mustang", 2023);

// Acessar propriedades e métodos
echo $carro1->marca; // Imprime: "Toyota"
echo $carro2->obterAno(); // Imprime: 2023



// ==================== Vetores ou Arrays ===================== //
echo "<br>";
// Definir um vetor de números
$numeros = array(10, 20, 30, 40, 50);

// Acessar elementos do vetor
echo $numeros[0]; // Imprime: 10
echo $numeros[3]; // Imprime: 40

// Percorrer e imprimir todos os elementos
foreach ($numeros as $numero) {
    echo $numero . " ";
}
// Imprime: 10 20 30 40 50




// ==================== function ===================== //
echo "<br>";
function calcularFatorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}

$numero = 5;
$fatorial = calcularFatorial($numero);

echo "O fatorial de $numero é $fatorial"; // Imprime: O fatorial de 5 é 120



// ==================== Estruturas de Repetição ===================== //
echo "<br>";
function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Números primos menores que 50: ";
for ($num = 2; $num < 50; $num++) {
    if (ehPrimo($num)) {
        echo $num . " ";
    }
}
echo "<br>";

// Usando a estrutura de repetição for para imprimir os números de 1 a 5
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
// Imprime: 1 2 3 4 5
echo "<br>";

// Usando a estrutura de repetição while para imprimir os números de 1 a 5
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
// Imprime: 1 2 3 4 5


?>