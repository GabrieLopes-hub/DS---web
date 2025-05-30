<?php
session_start();
include_once('..\conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: ..\login.php");
    exit();
}

?>

<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo"<script>alert('Está faltando o método POST')
            window.location.href = '.\produto.php';
        </script>";
    }
    
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $estoque = $_POST["estoque"];
    $preco = $_POST["preco"];


    include "produtoValida.php";
    
    if (validaProduto( $codigo, $nome, $estoque, $preco)){
        include "..\conexao.php";
    
        echo "<h2>Inserindo dados</h2>";
        
        $statement = $db->prepare("INSERT INTO produto (codigo, nome, estoque, preco) VALUES (:codigo, :nome, :estoque, :preco)");
        $statement->bindParam(':codigo', $codigo);
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':estoque', $estoque);
        $statement->bindParam(':preco', $preco);
        $statement->execute();        
    }
    header("Location: .\produto.php");
?>