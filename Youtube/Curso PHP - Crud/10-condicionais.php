<?php
/*
*IF
*ELSE
*ELSEIF
*/

/*$numero = 50;

if ($numero == 10):
    echo "É igual a 10";
elseif($numero <= 9):
    echo "É igual ou menor a 9";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

$media = 6;

echo ($media >= 7) ? "Aprovado" : "Reprovado";*/

/*
SWITCH
CASE
*/

$cor = "Amarelo";

switch($cor):
    case "Vermelho":
    echo "Sua cor preferida é vermelho";
    break;
    case "Verde":
    echo "Sua cor preferida é verde";
    break;
    case "Azul":
    echo "Sua cor preferida é azul";
    break;
    default:
    echo "Sua cor preferida não é nenhuma das listadas";

endswitch;
?>