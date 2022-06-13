<?php

class Pai{
    function __construct(public string $nome="", public int $idade=0)
    {
        
    }

      
  public function set_nome_idade(string $nome, int $idade){
    $this->nome = $nome;
    $this->idade = $idade;
  }

    //MÉTODO PUBLICO
    public function qualNome(){
        echo "<br>O nome dessa pessoa é: ".$this->nome;
    }

    //MÉTODO PROTEGIDO
    protected function qualIdade(){
        echo "<br><br>A idade dessa pessoa é: ".$this->idade;
    }

        //MÉTODO PRIVADO
        private function todasInformacoes(){
            echo "<br><br>O nome é: ".$this->nome."a idade é ".$this->idade;
        }
    

}

class Filho extends Pai{

    function __construct(public string $olhos="")
    {
        parent::__construct();
    }

}

//PAI
$pai = new Pai();
var_dump($pai);

//FILHO
$filho = new Filho("Verdes","Pedro",15);
$filho->set_nome_idade("Pedro",20);
var_dump($filho);