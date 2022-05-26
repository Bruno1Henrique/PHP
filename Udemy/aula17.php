<?php
    date_default_timezone_set('America/Sao_Paulo');
    //echo date("d/m/Y") . "<br>";
    //echo date("h:m:s") . "<br>";

    $hora = date("H");
    if ($hora > 0 && $hora <= 5) {
        echo "Boa Madrugada";
    }elseif ($hora > 5 && $hora <= 12){
        echo "Bom Dia";
    }elseif  ($hora > 12 && $hora < 18){
        echo "Boa  Tarde";
    }else{
        echo "Boa Noite";
    }
?>