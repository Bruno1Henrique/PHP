<?php
//Associacao = Aacontece quando um objeto usa outro, porém sem que eles dependam um do outro

class Pedido{
    public $numero;
    public $cliente;
}
class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Henrique";
$cliente->endereco = "Rua XXX, Numero 10";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
    'numero'=>$pedido->numero,
    'nome_cliente'=>$pedido->cliente->nome,
    'endereco'=> $pedido->cliente->endereco
);

var_dump($dados);