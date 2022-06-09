<?php
    //MANIPULAÇÃO DE STRING

    //strlen() - mostra o tamanho da string
    echo strlen('Oi pessoal');

    echo "<br>";

    //str_word_count() - mostra quantas palavras tem
    echo str_word_count('Oi como vai');

    echo "<br>";

    //strrev() - string reversa
    echo strrev('Bruno');

    echo "<br>";

    //strpos() - mostra posição da palavra
    echo strpos("Oi tudo bom?","tudo");

    echo "<br>";

    //str_replace() - substitui uma palavra
    $palavra = "Olá mundo";
    echo str_replace("mundo","Bruno",$palavra);

    //Outro exemplo
    $data = "25-08-2021"; //25/08/2021
    $data_formata =str_replace("-","/",$data);
    echo "<br>";
    echo $data_formata;

?>