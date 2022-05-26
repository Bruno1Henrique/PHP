<?php
    $jsosnStr = '{"titulo":"Titanic","sinopse":"Um navio que colide com um iceber e afunda","ano":1997,"horarios":["16:00","19:00","20:00"]}';

    $arrayfilme = json_decode($jsosnStr);


    echo"<p><b>Titulo: </b>". $arrayfilme->titulo."</p>";
    echo"<p><b>Sinopse: </b>". $arrayfilme->sinopse."</p>";
    echo"<p><b>Ano: </b>". $arrayfilme->ano."</p>";
    echo"<p><b>Horarios: </b></p>";

    for($i = 0; $i < count($arrayfilme ->horarios); $i++){
        echo"<p>--------<b>".$arrayfilme->horarios[$i]."</b></p>";
        
    }
?>