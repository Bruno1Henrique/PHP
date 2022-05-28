<?php
    /*FUNCOES functions() */

    function EscreverMensagem($nome){
        echo "Olá, tudo bom $nome";
    }

    EscreverMensagem("Bruno");

    echo "<br>";

    function soma($valor1, $valor2){
        echo $valor1 + $valor2;
    }

    soma(2,2);
?>