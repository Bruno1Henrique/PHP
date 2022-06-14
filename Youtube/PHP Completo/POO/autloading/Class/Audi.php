<?php

use Carro as GlobalCarro;

abstract class Carro{
    abstract function teste();

}

class Audi extends Carro{
    function teste(){
        echo "Olá sou um método concreto<br>";
    }
}