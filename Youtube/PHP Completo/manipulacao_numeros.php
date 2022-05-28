<?php
    /*Manipulação de números*/
    $valor = "150" + 20;
    $valor_convertido = (int) $valor;
    var_dump($valor_convertido);

    echo "<br>";

    $valor1 = 100;
    $valor2 = 5.75;
    $valor3 = "teste";

    var_dump(is_float($valor2));
?>