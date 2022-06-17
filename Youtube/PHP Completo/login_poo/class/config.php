<?php
session_start();
//CONFIGURACOES DO BANCO DE DADOS
define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('BANCO','login');

function limpapost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}