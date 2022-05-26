<?php
//Clone*
//construct*
//invoke*
//tostring*
//get*
//set*



class Pessoa{
    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __toString()
    {
        return "Tentei imprimi o objeto";
    }

    public function __invoke()
    {
        return "Objeto com funcao";
    }
}

$pessoa = new Pessoa();

echo $pessoa();