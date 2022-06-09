<?php

class Carros{
    //PROPRIEDADES
    public $modelo;
    public $ano;

    //MÉTODOS
 //   function set_modelo($modelo){
 //       $this->modelo = $modelo;
 //   }

 function __construct($modelo,int $ano)
 {
     $this->modelo = $modelo;
     $this->cor = $ano;
 }

    function get_modelo(){
        return $this->modelo;
    }

    function __destruct()
    {
        echo "Chegamos no final da nossa classe";
    }
}

$uno = new Carros("Uno",2015);
var_dump($uno);
