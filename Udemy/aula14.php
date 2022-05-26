<?php
    //$nome = "Bruno Henrique";
    //echo substr($nome,4,6); //Mostra X quantidade de caracteres

    //echo strtolower("OLA COMO VAI"); //transforma maiscula em minuscula
    //echo strtoupper("ola como vai"); //transforma miniscula em maiuscula

    //$msg = strip_tags("<h1>Bem Vindo</h1> acesse o <a href=''><b>link</b></a>", "<a>"); // Não deixa usar tags, ao final depois da virgula colocamos as tags que ele vai deixar utilizar
    //echo $msg;

   // $comida = "Banana, Maçã, Pera, Uva";
   // $alt = str_replace("Banana","Morango", $comida);
    //echo $alt;

    //$nome = "Bruno Henrique Pedroso";
    //$ex = explode(" ", $nome); //Mostra somente o primeiro nome
    //echo $ex[0];

    $nome = "Fulando";

    if (strlen($nome) <=10){
        echo "Valido";
    } else {
        echo "Invalido";
    }
?>
