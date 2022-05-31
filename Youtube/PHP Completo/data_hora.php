<?php
/* Manipulando data e hora */

//DATA COMPLETA
echo date('d/m/Y');

echo "<br><br>";

//HORA
echo date('H:i:s');

echo "<br><br>";

//CALCULAR DIAS ENTRE DATA
$hoje = date('Y-m-d');
$vencimento = '2022-10-15';

$diferenca = strtotime($vencimento) - strtotime($hoje);
$dias = floor($diferenca / (60*60*24));

//CONVERSAO PARA O PADRÃO BR
$venc = explode('-',$vencimento);
$vec_formatado = $venc[2]."/".$venc[1]."/".$venc[0];

$data_hoje = explode('-',$hoje);
$hoje_formatado = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

echo "Vencimento: $vec_formatado <br>";
echo "Hoje: $hoje_formatado <br>";
echo "a diferença é de $dias dias entre as datas";

echo "<br><br>";

//COMPARAR DUAS DATAS MAIOR OU MENOR
$data1= '2022-09-20';
$data2 = '2021-09-20';

if(strtotime($data1) > strtotime($data2)){
    echo "A data 1 é maior que a data 2";
}elseif(strtotime($data1)==strtotime($data2)){
    echo "A data 1 é igual data 2";
}else{
    echo "A data 1 é menor que a data 2";
}