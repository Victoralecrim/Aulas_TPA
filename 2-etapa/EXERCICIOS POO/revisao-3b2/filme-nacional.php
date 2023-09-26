<?php
    require_once("filme.php");

    class FilmeNacional extends Filme {

        public function imprimir_folder() {
            $dados = "Nome do Filme: " . $this->get_nome() . "<br>";
            $dados .= "Ano Lançamento é: " . $this->get_ano_lancamento() . "<br>";
            return $dados;
        }

    }
?>