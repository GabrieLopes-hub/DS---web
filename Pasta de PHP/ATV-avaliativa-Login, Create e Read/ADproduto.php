<?php
include_once("connection.php");

$nomep = $_POST['nomeProdu'];
$preco = $_POST['valor'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO produtos(nome, descricao, preco) VALUES ('$nomep', '$descricao', '$preco')";
if (mysqli_query($connection, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($connection);
}
?>