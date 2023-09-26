<?php
abstract class Filme
{
    private $nome = "";
    private $data_lançamento = "";

    abstract public function imprimir_folder(): string;

    public function set_nome($nome)
    {
        $this->name = $nome;
    }

    public function get_nome()
    {
        return $this->nome;
    }
    public function set_data_lançamento($data_lançamento)
    {
        $this->data_lançamento = $data_lançamento;
    }

    public function get_data_lançamento()
    {
        return $this->data_lançamento;
    }
}
