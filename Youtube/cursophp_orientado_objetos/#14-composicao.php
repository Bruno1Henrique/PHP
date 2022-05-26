<?php
//Na Composição uma classe cria uma instancia de outra classe dentro de si própria, sendo assim quando ela for destruida a outra classe também será.


class Pessoa{
    public function atribuiNome($nome){
        return "O nom da pessoa é ".$nome;
    }
    
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa;
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
       
}


$exibe = new Exibe("Henrique");
$exibe->exibeNome();