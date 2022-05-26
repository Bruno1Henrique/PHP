<?php

//Aproveita outras classes que podem ser usadas em grupos diferentes, no caso de caracteristcas que são iguais 

class Veiculo{

    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }

}

class Carro extends Veiculo {

    public function LigarLimpador(){
        echo "Limpando Vidro";
    }

}

class Moto extends Veiculo{

    public function DarGrau(){
        echo "Dar Grau";
    }
 
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = "2018";
$carro->Andar();
echo "<br>";
$carro->LigarLimpador();
var_dump($carro);

echo "<hr>";

$moto = new Moto();
$moto->modelo = "CG";
$moto->cor = "Azul";
$moto->ano="2019";
$moto->Parar();
echo "<br>";
$moto->DarGrau();
var_dump($moto);
