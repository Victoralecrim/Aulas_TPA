<?php
    require_once("conta.php");

    class ContaCorrente extends Conta {

        public function sacar($valor) {

            $msg = Conta::sacar($valor);
            $msg .= " Essa operacao foi realizada na conta corrente";
            return $msg;

        }

    }

?>