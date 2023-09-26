<?php
    abstract class Funcionario {
        private $nome = "";
        private $salario = 0.0;

        public function __construct($nome, $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function get_nome() {
            return $this->nome;
        }

        public function get_salario() {
            return $this->salario;
        }        

        public abstract function receber_pagamento();

    }
?>