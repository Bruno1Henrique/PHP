<?php

//Usando um método abstrato não é possivel usar a classe ou a funcao

abstract class Banco {
    protected $saldo;
    protected $limitesaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    
}

class Itau extends Banco{

    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }

}



$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: ".$itau->getSaldo();
