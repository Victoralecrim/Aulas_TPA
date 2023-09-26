<?php
    
    abstract class Conta {
        private $agencia = "";
        private $conta = "";
        private $titular = "";
        protected $saldo = 0.0;

        public function __construct($agencia, $conta, $titular) {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->titular = strtoupper($titular);
        }

        public function get_agencia() {
            return $this->agencia;
        }

        public function get_conta() {
            return $this->conta;
        }        

        public function get_titular() {
            return $this->titular;
        }       
        
        public function get_saldo() {
            return $this->saldo;
        }        

        public function sacar($valor) {
            if ($valor < 0) {
                throw new Exception("O valor nao pode ser negativo!");
            }

            if ($valor > $this->saldo) {
                throw new Exception("O valor nao pode ser maior que o saldo atual da conta!");
            }

            $this->saldo -= $valor;
            return "Saque realizado com sucesso!";
        }

        public function depositar($valor) {
            if ($valor < 0) {
                throw new Exception("O valor nao pode ser negativo!");
            }

            $this->saldo += $valor;
            return "Deposito realizado com sucesso!";
        }

    }

?>