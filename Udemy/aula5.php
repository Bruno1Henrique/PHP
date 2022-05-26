<?php
 define("min", 17);
 define("max",45);

 $idade = 15;
 
 echo "Idade minima" .min. "<br>";
 echo "Idade maxima" .max. "<br>";

 if($idade >= min && $idade <= max){
     echo "ACESSO LIBERADO...";
 }else{
     echo "ACESSO BLOQUEADO";
 }
?>