<?php
$loja = array(
    "Melão" => array("preco" => 4.50, "Estoque" => 15),
    "gaiola" => array("preco" => 45.50, "Estoque" => 10),
    "controle" => array("preco" => 250.50, "Estoque" => 3),
);

echo "<ul>";
foreach  ($loja as $nome => $deta){
    echo "<li>";
    echo "Fruta: ". $nome . "<br>"; 
    echo "preço: R$". number_format($deta["preco"], 2, ',', '.') . "<br>";
    echo "Estoque: ".  $deta["Estoque"] ." unidade" ."<br>";
    echo "</li><br>";
}
echo "</lu>";
?>