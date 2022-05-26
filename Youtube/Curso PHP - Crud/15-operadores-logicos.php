<?php
    //Nos permite fazer comparações entre expressoes
    //e (%% - and)
    //ou (|| - or)
    //ou exclusivo (xor) - Somente se uma for verdadeira, se ambas forem verdadeira vai ser falso
    //negacao (!)

    $idade = 25;
    $nome = "Bruno";
   
    if(($idade == 25) && ($nome == "Bruno")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;
?>