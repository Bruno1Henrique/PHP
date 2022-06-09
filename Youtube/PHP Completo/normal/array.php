<?php
/*Arrays
$carros = array("fusca","uno","gol");
//OU
$carros = ["fusca","uno","gol","celta"];

echo $carros[0];
echo "<hr>";

//Mostra tamanho do array
$quantidade = count($carros);
echo "A quantidade na matriz é $quantidade";
echo "<hr>";

//Tamanho de arrays com for

$qtd = count($carros);

/*for ($i = 0; $i < $qtd; $i++){
    echo $carros[$i];
    echo "<br>";
}

foreach($carros as $carro){
    echo $carro."<br>";
}*/

/*$idade = ["Bruno"=>"22","Maria"=>"15","Pedro"=>"60"];

echo $idade["Bruno"];
echo "<hr>";

foreach ($idade as $chave => $valor){
    echo "A chave é $chave e o valor é $valor <br>";
}*/

//Colocando em ordem alfabetica
$carros = ["fusca","gol","prisma","astra"];
sort($carros);

foreach ($carros as $carro){
    echo $carro. "<br>";
}