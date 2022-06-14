<?php

trait Comer{
    function comer(){
        echo "Hmm que fome";
    }
}

class Pessoa{
    use Comer;

    function teste(){
        echo "Essa é a classe pessoa!<br>";
    }
}

class Animal{
    use Comer;
}