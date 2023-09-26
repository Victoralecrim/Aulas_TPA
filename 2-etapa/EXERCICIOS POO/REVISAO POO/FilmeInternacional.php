<?php
    require_once("Filme.php");
    class Filme_internacional extends Filme{
        private $dublagens;
        private $lingua_original = "";

        public function set_dublagens($dublagens)
        {
            $this->dublagens = $dublagens;    
        }

        public function get_dublagens(){
            return $this->dublagens;
        }

        public function set_lingua_original($lingua_original)
        {
            $this->lingua_original = $lingua_original;    
        }

        public function get_lingua_original(){
            return $this->lingua_original;
        }

        public function imprimir_folder(): string
        {
            return $this->get_nome().$this->get_data_lançamento().$this->get_dublagens().$this->get_lingua_original();
        }
    }
