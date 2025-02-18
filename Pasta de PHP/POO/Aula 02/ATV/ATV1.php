<?php
class pessoa{
    public $nome;
    private $idade;

}
class funcionario extends pessoa{
    public $salario = 100;

}
class gerente extends funcionario{
    
    public function verdados(){
        $salarioGE = ($this->salario / 100) * 20 + $this->salario;

        echo "Nome: ". $this->nome ."| Idade: ". $this->idade  . "| Salario: ". $salarioGE;
    }
}
class desenvolvedor extends funcionario{

    public function verdados(){
        $salarioGE = ($this->salario / 100) * 10 + $this->salario;
        
        echo "Nome: ". $this->nome ." Idade: ". $this->idade  . " Salario: ". $salarioDS;
    }
}


$pessoa1 = new gerente();
$pessoa1->nome = "Gariel";
$pessoa1->idade = 12;
$pessoa1->verdados();