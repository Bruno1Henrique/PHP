<?php
    //$cor = "azul";
    //$COR = "verde";
    // echo $COR;

    $x = 10;
    $y = 5;

    function teste() {
        global $x;
        echo "O valor de X é: $x";
    }

    teste();
    echo "<br>O valor de X fora: $x";
?>