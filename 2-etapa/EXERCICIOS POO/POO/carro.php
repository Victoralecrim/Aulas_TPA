<?php

class Carro
{
    private $modelo = "";
    private $velocidade = 0;
    private $velocidade_maxima = 0;


    public function __construct($modelo, $velocidade_maxima)
    {
        $this->set_modelo($modelo);
        $this->set_velocidade_maxima($velocidade_maxima);
    }



    public function set_modelo($modelo)
    {
        $this->modelo = strtoupper($modelo);    
    }

    public function get_modelo()
    {
        return $this->modelo;
    }

    public function acelerar()
    {
        if ($this->velocidade < $this->velocidade_maxima) {
            $this->velocidade += 5;
        }
    }

    public  function freiar()
    {
        if ($this->velocidade > 0) {
            $this->velocidade -= 5;
        }
    }

    public function get_velocidade()
    {
        return $this->velocidade;
    }

    public function set_velocidade_maxima($velocidade_maxima)
    {
        if ($this->velocidade_maxima > 0) {
            $this->velocidade_maxima = $velocidade_maxima;
        }
    }

    public function get_velocidade_maxima()
    {
        return $this->velocidade_maxima;
    }
}
