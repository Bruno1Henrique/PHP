<?php
    function exibirNome($nome){
        echo "Meu nome é $nome";
    }

exibirNome("Henrique");

echo "<hr>";

function CalcularMedia($nome,$n1,$n2,$n3,$n4){
    $media = ($n1+$n2+$n3+$n4)/4;
    if ($media >= 7):
        echo "$nome foi aprovado com a média de $media.";
    else:
        echo "$nome foi reprovado";
    endif;
}

CalcularMedia("Bruno",7,7,7,4);
?>