<?php
include_once("conexão.php");

$nomeProdu = $_POST['nomeProdu'];
$preço = $_POST['preço'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO produtos(nomeProdu, valorProdu, estoque) VALUES ('$nomeProdu', '$preço', '$estoque')";
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>