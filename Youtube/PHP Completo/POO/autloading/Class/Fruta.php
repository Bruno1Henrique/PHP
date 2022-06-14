<?php

interface MetodosFrutas{
    function criar($nome,$cor);
    function completo();
}

class Fruta implements MetodosFrutas{

    //METODO DA CLASSE FRUTA
    function teste(){
        echo "Essa é a classe fruta!<br>";
    }

    //METODOS DA INTERFACE
    function criar($nome, $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function completo(){
        echo "A fruta é $this->nome e a cor é $this->cor <br>";
    }
}