<?php
/*
number_format
round = arredonda
ceil = arredonda para cima
floor = arredonda para baixo
rand

*/

$db = 1234.56;
$preco = number_format($db, 2,",",".");

echo "o valor do produto é R$ $preco";

echo"<hr>";

echo round(3.55);

echo"<hr>";

echo ceil(8.1);

echo"<hr>";

echo floor(8.99);

echo"<hr>";


echo rand(10,20);
?>