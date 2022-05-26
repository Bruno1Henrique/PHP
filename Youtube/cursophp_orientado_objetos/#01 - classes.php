<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome." de ".$this->idade." anos acabou de falar";
    }
}

$rodrigo = new Pessoa();

$rodrigo->nome = "Bruno Henrique";
$rodrigo->idade = 25;

$rodrigo->Falar();

echo "<hr>";
echo $rodrigo->nome;


?>