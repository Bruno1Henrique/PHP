<?php
    /*
    String [palavras]
    Integer [Inteiro, qualquer não decimal]
    Float [Decimal, números decimais]
    Boolean [Verdadeiro ou falso]
    Array [Matriz]
    Object [Objeto]
    Null [Nulo]
    */

    //String
    $exemplo = "<h1>Olá Mundo</h1>";


    //Integer
    $exemplo2 = 345;

    //Float
    $exemplo3 = 2.5;

    //Boolean
    $true = true;

    //Array (Matrize)
    $carros = array("Gol","Uno","Palio");

    //Object
    class carro{
        public $cor;
        public $modelo;
        public function __construct($cor,$modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem(){
            return "O carro é $this->cor e o modelo é  $this->modelo";
        }
    }

    $carro1 = new carro("Branco","Gol");
    //echo $carro1->mensagem();
    //echo $carro1->cor;
    echo $carro1->modelo;
?>