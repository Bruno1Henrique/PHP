<?php
    //Constantes
    define("exemplo","oi");

    function teste(){
        echo exemplo;
    }

    teste();

    echo "<br>";

    // Constantes com Array
    define("carros",["fusca","gol","uno"]);

    echo carros[1];

    