<?php
    /*{
   "titulo":"Titanic",
   "sinopse":"Um navio que colide com um iceber e afunda",
   "ano":1997,
   "horarios":[
      "16:00",
      "19:00",
      "20:00"
   ]
}*/

$arrayfilme = array(
    "situlo" => "Titanic",
    "sinopse" => "Um navio que colide com um iceber e afunda",
    "ano" => 1997,
    "horarios" => array(
        "16:00",
        "19:00",
        "20:00",
    )
);

//var_dump($arrayfilme );

$jsonStr = json_encode($arrayfilme);
echo $jsonStr
?>