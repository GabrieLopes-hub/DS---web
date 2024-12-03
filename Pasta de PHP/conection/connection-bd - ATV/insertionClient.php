<?php
include_once("conexão.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes(nome, email) VALUES ('$nome', '$email')";
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>