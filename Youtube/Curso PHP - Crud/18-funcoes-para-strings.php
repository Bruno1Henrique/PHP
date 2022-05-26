<?php
//Funcoes para string
/*
strtoupper = deixa em maisculo
strtolower = deixa em minisculo
subtr = retorna parte de string
str_pad = adiciona algo a mais na string
str_repeat = repete algo
strlen = mostra tamanho da string
str_replace = 
strpos = retorna posicao de palavra em um texto

*/ 

$nome = "bruno henrique";
$novoNome = strtoupper($nome);
    echo $novoNome;

echo "<hr>";

$nome = "BRUNO HENRIQUE";
$novoNome = strtolower($nome);
    echo $novoNome;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem,4,4);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto,10, "*",STR_PAD_LEFT);

echo $novoObjeto;

echo "<hr>";

echo str_repeat("zap ",5);

echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
$novo_texto = str_replace("Argentina","Brasileira",$texto);
echo $novo_texto;

echo "<hr>";

echo strpos($texto, "copa");
?>