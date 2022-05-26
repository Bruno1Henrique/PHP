<?php
require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as productClass;
use models\Produto as productModel;

$produto = new productModel();
$produto->mostrarDetalhes();

echo "<br>";

$produto2 = new productClass;
$produto2->mostrarDetalhes();