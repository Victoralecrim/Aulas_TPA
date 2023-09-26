<?php
    require_once("filme.php");
    class FilmeInternacional extends Filme {
        private $lingua_original = "";
        private $dublagens = array();

        public function __construct($nome, $ano_lancamento, $lingua_original, $dublagens) {
            $this->set_nome($nome);
            $this->set_ano_lancamento($ano_lancamento);
            $this->lingua_original = $lingua_original;
            $this->dublagens = $dublagens;
        }

        public function set_lingua_original($lingua_original) {
            $this->lingua_original = $lingua_original;
        }

        public function get_lingua_original() {
            return $this->lingua_original;
        }
        
        public function set_dublagens($dublagens) {
            $this->dublagens = $dublagens;
        }

        public function get_dublagens() {
            return $this->dublagens;
        }    
        
        public function imprimir_folder() {
            $dados = "Nome do Filme: " . $this->get_nome() . "<br>";
            $dados .= "Ano Lançamento é: " . $this->get_ano_lancamento() . "<br>";
            $dados .= "Lingua original é: " . $this->lingua_original . "<br>";
            $dados .= "Dublado nas linguas<br>";
            foreach ($this->dublagens as $lingua) {
                $dados .= $lingua . ", ";
            }
            $dados = substr($dados, 0, strlen($dados) - 2);
            $dados .= "<br>";
            return $dados;            
        }

    }
?>