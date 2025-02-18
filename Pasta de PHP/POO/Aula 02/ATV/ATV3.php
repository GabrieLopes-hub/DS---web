<?php
Class veiculo{
    public $marca;
    public $modelo;
    private $velocidade = 0;
}
class moto extends veiculo{
    public function getVeloMoto(){
        return $this->velocidade;
    }
    public function setVeloMoto($VeloM) {
        $this->velocidade = $VeloM;
    }function acelerarC(){
        echo "Pise no pedal para acelerar";
    }function dadosMoto(){
        echo "Marca: " . $this->marca . " | Modelo: " . $this->modelo . " | Velocidade: ". $this->velocidade;
    }

}
class carro extends veiculo{
    public function getVeloCarro(){
        return $this->velocidade;
    }
    public function setVeloCarro($VeloC) {
        $this->velocidade = $VeloC;
    }function acelerarC(){
        echo "Pise no pedal para acelerar";
    }function dadosCarro(){
        echo "Marca: " . $this->marca . " | Modelo: " . $this->modelo . " | Velocidade: ". $this->velocidade;
    }

}
$carro1 = new carro();
$carro1-> marca = "Fiat";
$carro1-> modelo = "Fiat Uno com escada e adesivo da firma";
$carro1-> setVeloCarro(10000000000000);
$carro1->dadosCarro();