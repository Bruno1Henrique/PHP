<?php

/*class Teste{
    public static function ola(){
        echo "Olá mundo estatico<br>";
    }

    function teste(){
        self::ola();
    }
}

class TesteFilho extends Teste{
    function __construct()
    {
        parent::ola();
    }
}

class Aleatoria{
    function qualquer(){
        Teste::ola();
    }
}*/

class Teste{
    static $indice=0;
    public $id;

    function novo(){
        $this->id = self::$indice;
        self::$indice++;
    }
}