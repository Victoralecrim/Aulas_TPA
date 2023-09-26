<?php
    class Ave {
        public $especie = "";
        public $cor = "";
        public $velocidade_maxima_voo = 0;
        public $velocidade_atual_voo = 0;

        public function decolar() {
            if ($this->velocidade_maxima_voo != 0) {
                if ($this->velocidade_atual_voo == 0) {
                    $this->velocidade_atual_voo = 25;
                }
            }
        }

        public function acelerar() {
            if ($this->velocidade_atual_voo >= 25 && $this->velocidade_atual_voo < $this->velocidade_maxima_voo) {
                $this->velocidade_atual_voo += 5;
            }
        }

        public function freiar() {
            if ($this->velocidade_atual_voo > 25) {
                $this->velocidade_atual_voo -= 5;
            }
        }

        public function pousar() {
            if ($this->velocidade_atual_voo == 25) {
                $this->velocidade_atual_voo = 0;
            }
        }
    }
?>