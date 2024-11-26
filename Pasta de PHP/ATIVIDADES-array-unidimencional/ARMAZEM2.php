<?php
$loja = array(
    "Melão" => array("preço" => 4.50, "Estoque" => 15),
    "Laranja" => array("preço" => 6.50, "Estoque" => 40),
    "Melancia" => array("preço" => 2.50, "Estoque" => 23),

);
$loja["Melão"]["preço"] = 2.90;

echo "<ul>";
foreach  ($loja as $nome => $deta){
    echo "<li>";
    echo "Fruta: ". $nome . "<br>";
    echo "preço: R$". number_format($deta["preço"], 2, ',', '.') . "<br>";
    echo "Estoque: ".  $deta["Estoque"] ." unidade" ."<br>";
    echo "</li><br>";
}
echo "</lu>";
?>