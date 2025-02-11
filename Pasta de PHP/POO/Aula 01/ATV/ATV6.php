<?php
class contabancaria {
    public $titular;
    public $Saldo;
    public $número_da_conta;
    //Atributos da conta bancária

    public function deposita(float $valor){// o $valor é o que a função vai receber para funcionar
        $this->saldo += $valor;
        echo "<br>";
        echo $this->titular . " depositou: " . $valor;
        echo "<br>";
    }
    public function saque(float $valor){
        $this->saldo -= $valor;
        echo $this->titular . " sacou: " . $valor;
    }
}
$conta = new contabancaria();//estou adcionado o formato da class dentro da variável conta
$conta->titular = "Roberto";
$conta->saldo = 300;
$conta->número_da_conta = 1234;

$conta->deposita(100);//estou informando à variável conta a deposito e o valor
$conta->saque(50);

echo "<br>";
echo $conta->saldo;
?>