<?php

    require_once("../includes/database.php");

    class produto{
        private $id_produto = 0;
        private $nome_produto = "";
        private $preco_produto =  0;

        public function set_id($id_produto){
            $this->id_produto = $id_produto;
        }

        public function get_id(){
            return $this->id_produto;
        }

        public function set_nome($nome_produto){
            $this->nome_produto = $nome_produto;
        }

        public function get_nome(){
            return $this->nome_produto;
        }

        public function set_preco($preco_produto){
            $this->preco_produto = $preco_produto;
        }
        public function get_preco(){
            return $this->preco_produto;
        }

        public static function find_all(){
            $lista = array();
            $con = get_connection();
            $stmt = $con->prepare("select * from produto order by id_produto");
            $stmt->execute();

            while ($row = $stmt->fetch()){
                $produto = new Produto();

                $produto->set_id($row["id_produto"]);
                $produto->set_nome($row["nome_produto"]);
                $produto->set_preco($row["preco"]);
                $lista[] = $produto;
            }

            $stmt = null;
            $con = null;
            return $lista;
        }
    }

?>