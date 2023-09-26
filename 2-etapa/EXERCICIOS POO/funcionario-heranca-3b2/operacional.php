<?php
    require_once("funcionario.php");

    class Operacional extends Funcionario {

        public function receber_pagamento() {
            $salario_a_receber = $this->get_salario() + ($this->get_salario() * 5.0 / 100.0);
            return $salario_a_receber;
        }

    }
?>