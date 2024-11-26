<?php
$loja = array(
    "Melão" => array("preco" => 4.50, "Estoque" => 15),
    "Laranja" => array("preco" => 6.50, "Estoque" => 40),
    "Melancia" => array("preco" => 2.50, "Estoque" => 23),

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