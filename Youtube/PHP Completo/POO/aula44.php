<?php

 class Exemplo{
    public const nomeConstante = "yes";

    function teste(){
        echo self::nomeConstante;
    }
 }

 //INSTANCIEI A CLASSE
 //$exemplo = new Exemplo();
 //echo $exemplo::nomeConstante;

 //TAMBÉM FUNCIONA ASSIM
 ///echo Exemplo::nomeConstante;

 $exemplo = new Exemplo();
 $exemplo->teste();