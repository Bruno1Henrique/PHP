<?php

/*$texto = '{
    "cep": "89705-110",
    "logradouro": "Rua Silvino Ciarini",
    "complemento": "",
    "bairro": "Industriários",
    "localidade": "Concórdia",
    "uf": "SC",
    "ibge": "4204301",
    "gia": "",
    "ddd": "49",
    "siafi": "8083"
  }
  ';

  $dados = json_decode($texto,true);

  $dados['dono'] = "Henrique";

  $json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

  var_dump($dados);

  echo "<br>";
  echo "<br>";

  echo $dados['bairro'];

  echo "<pre>$json</pre>";*/


$texto = $_POST['texto'];
$dados = json_decode($texto, true);

$dados['aluno'] = "Lindo";

$json = json_encode($dados);

echo $json;