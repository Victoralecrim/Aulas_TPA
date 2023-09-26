<?php
    abstract class Filme {
        private $nome = "";
        private $ano_lancamento = 0;

        public function __construct($nome, $ano_lancamento) {
            $this->nome = strtoupper($nome);
            $this->ano_lancamento = $ano_lancamento;
        }

        public function set_nome($nome) {
            $this->nome = strtoupper($nome);
        }

        public function get_nome() {
            return $this->nome;
        }

        public function set_ano_lancamento($ano_lancamento) {
            $this->ano_lancamento = $ano_lancamento;
        }

        public function get_ano_lancamento() {
            return $this->ano_lancamento;
        }        

        public abstract function imprimir_folder();
    }
?>