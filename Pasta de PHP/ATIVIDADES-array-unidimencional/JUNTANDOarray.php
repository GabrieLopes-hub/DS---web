<?php
// Arrays com os produtos e preços
$produtos = ["Teclado", "Mouse", "Monitor"];
$precos = [150.00, 80.00, 1200.00];

// Combinando os dois arrays em um array associativo
$loja = array_combine($produtos, $precos);

// Exibindo o array resultante

print_r($loja);

?>
