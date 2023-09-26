<?php
class ave
{
    public $especie;
    public $cor;
    public $velocidade_max_voo;
    public $velocidade_atual_voo = 0;

    function decolar()
    {

        if ($this->velocidade_atual_voo == 0 && $this ->velocidade_max_voo != 0) {
            $this->velocidade_atual_voo = 25;
        }
    }

    function acelerar()
    {
        if ($this->velocidade_atual_voo >= 25 && $this->velocidade_atual_voo < $this->velocidade_max_voo) {
            $this->velocidade_atual_voo += 5;
        }
    }

    function freiar()
    {
        if ($this->velocidade_atual_voo > 25) {
            $this->velocidade_atual_voo -= 5;
        }
    }

    function pousar()
    {

        if ($this->velocidade_atual_voo == 25) {
            $this->velocidade_atual_voo = 0;
        }
    }

    
}

$ave1 = new ave();
$ave1 -> especie = 'Gavião';
$ave1 -> cor = 'preto';
$ave1 -> decolar();
$ave1 -> acelerar();
$ave1 -> freiar();
$ave1 -> pousar();

$ave2 = new ave();
$ave2 -> especie = 'Falcão';
$ave2 -> cor = 'marrom';
$ave2 -> decolar();
$ave2 -> acelerar();
$ave2 -> pousar();
$ave2 -> freiar();