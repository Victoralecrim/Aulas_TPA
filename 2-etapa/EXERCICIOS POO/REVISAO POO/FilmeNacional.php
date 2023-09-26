<?php
    class Filme_Nacional extends Filme{
        public function imprimir_folder(): string
        {
            return $this->get_nome()." ".$this->get_data_lançamento();
        }
    }

?>