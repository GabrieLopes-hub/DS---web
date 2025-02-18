<?php
class documento{
    private $numero;

    public function getnum(){
        return $this->numero;
    }public function setnum($n){
        $this->numero = $n;
    }
}
class CPF extends documento{
    public function validar(): bool {
        // Extrai somente os números
        $cpf = preg_replace('/\D/', '', $this->getNum());
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$t] != $d) {
                return false;
            }
        }
        return true;
    }
}
$CPF1 = new CPF();
$CPF1->setNum("477.993.858-98");

if ($CPF1->validar()) {
    echo "CPF válido!";
} else {
    echo "CPF inválido!";
}