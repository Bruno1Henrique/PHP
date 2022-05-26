<?php

use Pessoa as GlobalPessoa;

class Pessoa{
    const nome = "Henrique";

    public function exibirNome(){
        echo self::nome;
    }
}


class Henrique extends Pessoa{
    const nome = "Pedroso";

    public function exibirNome(){
        echo self::nome;
    }
}

$henrique = new Henrique();
$henrique->exibirNome();
