<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "primeiro_banco";

// Create connection
$pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

//FUNCAO PARA LIMPAR AS ENTRDAS
function limparPost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}