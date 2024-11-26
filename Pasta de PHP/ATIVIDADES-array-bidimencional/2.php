<?php
$loja = array(
    "Melão" => array("preco" => 4.50, "Estoque" => 15),
    "gaiola" => array("preco" => 45.50, "Estoque" => 10),
    "controle" => array("preco" => 250.50, "Estoque" => 3),
);
$valM = $loja["Melão"]["preco"]*$loja["Melão"]["Estoque"];
$valG = $loja["gaiola"]["preco"]*$loja["gaiola"]["Estoque"];
$valC = $loja["controle"]["preco"]*$loja["controle"]["Estoque"];
echo $valM . "<br>";
echo $valG . "<br>";
echo $valC . "<br>";
?>