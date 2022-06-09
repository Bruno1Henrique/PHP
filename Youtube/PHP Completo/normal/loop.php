<?php

/*
while ->repete enquanto a condicao for true

do...while->executa um bloco, e depois repete o loop se a condicao for verdadeira

for -> repete um determinado numero de vezes

foreach -> execute algo para cada item dentro de uma matriz
*/

//while

$x = 0;

while ($x <= 100){
    echo "o número é: $x <br>";
    $x+=10;
}

echo "<br>";

//do..while

$x1 = 6;

do{
    echo "o número é: $x1 <br>";
    $x1++;
}while ($x1 <=5);

echo "<br>";

//for

for ($x2 =0; $x2 <=10; $x2++){
    echo "O numero é: $x2 <br>";
}

echo "<br>";

//foreach
$cores = ["azul","amarelo","verde","vermelho"];

foreach($cores as $valor){
    echo "A cor é $valor <br>";
}

