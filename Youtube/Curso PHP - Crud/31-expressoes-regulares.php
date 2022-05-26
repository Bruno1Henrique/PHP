<?php

$string = "abc";
$padrao = "/^a$/";

if(preg_match($padrao, $string)):
    echo "valido";
    echo "<hr>";
    echo $string;
else:
    echo "inválido";
    echo "<hr>";
endif;
?>