<?php
    require_once("conta.php");

    class ContaPoupanca extends Conta {
        
        public function aplicar_juros_mes($percentual) {
            if ($percentual < 0) {
                throw new Exception("O percentual deve ser positivo!");
            }

            $this->saldo += ($this->saldo * $percentual / 100.00);
            return "Juros do mes aplicado com sucesso!";
        }

    }

?>