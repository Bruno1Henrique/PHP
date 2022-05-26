<?php
    //Constantes
    define("NOME","Sarzo");
    define("IDADE", 24);
    define("ALTURA",1.70);
    define("CASADO",true);

    define("TIMES",['vasco','flamengo','santos']);
   
    echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA.'';
    echo "<hr>";
    echo TIMES[2];

    echo "<hr>";

    function exibeNome(){
        echo NOME;
    }

    exibeNome();


?>