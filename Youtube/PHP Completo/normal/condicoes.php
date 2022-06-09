<?php
/*IF ELSE ELSEIF

if(condicao){
    o que acontece se verdadeiro
}else{
    oque acontece se falso
} 

if(condicao){
    o que acontece se verdadeiro
}elseif{
    o que acontece se a primeira for falso e esse for verdadeira
}else{
    o que acontece se falso
} */

$hora = 8;

if ($hora <12){
    echo "Bom Dia";
}elseif ($hora <18){
    echo "Boa tarde";
}else{
    echo "Boa noite";
}

echo "<br>";

//SWITCH

$cor = "roxo";

switch($cor){
    case "vermelho":
        echo "A cor é vermelho";
        break;
    case "azul":
        echo "A cor é azul";
        break;
    case "rosa":
        echo "A cor é rosa";
        break;
    default:
    echo "A cor $cor é desconhecida";
}