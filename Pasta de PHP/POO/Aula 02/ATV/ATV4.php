<?php
class produto{
    public $nome;
    public $preco;
    public $estoque;
    public function calcularDesc(){}
}
class eletronico extends produto{
    public function calcularDesc(){
        $this->preco = ($this->preco / 100) * 10 + $this->preco;
        if ($this->estoque <= 5){
            $this->preco = ($this->preco / 100) * 10 + $this->preco;
        }
    } 
}
class roupa extends produto{
    public function calcularDesc(){
        $this->preco = ($this->preco / 100) * 20 + $this->preco;
        if ($this->estoque <= 5){
            $this->preco = ($this->preco / 100) * 10 + $this->preco;
        }
    }
    function dados(){
        echo "nome: " . $this->nome . " | estoque: " . $this->estoque . " | preço: ". $this->preco;
    }
}
$camisa = new roupa();
$camisa-> nome = "camisa";
$camisa-> estoque = 3;
$camisa-> preco = 100;
$camisa->calcularDesc();
$camisa->dados();