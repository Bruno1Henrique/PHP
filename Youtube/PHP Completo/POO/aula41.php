<?php

class Carros{
    //PROPRIEDADES
    public $modelo;
    public $cor;

    //MÉTODOS
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }

    function get_modelo(){
        return $this->modelo;
    }
}

$uno = new Carros();

$uno->set_modelo("UNO","Branco");
echo "<br>";
var_dump($uno);

$gol = new Carros();

$gol->set_modelo("GOL");
echo "<br>";
var_dump($gol);

echo "<br>";
echo "O carro inicial é ". $uno -> get_modelo() ;