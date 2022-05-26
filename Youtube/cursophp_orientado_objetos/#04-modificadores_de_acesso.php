<?php

//Public - Deixar acessar o atributoem qualquer lugar

//Protected - Deixar acessar somente o atributo dentro da classe

//Private

class Veiculo{

    private $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
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

$carro = new Veiculo();
$carro ->setModelo("Uno");
echo $carro->getModelo();
var_dump($carro);