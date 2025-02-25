<?php
    //MySQL
    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    //inserindo dados
    $statement = $db->prepare("INSERT INTO clientes(nome, email) VALUES (?, ?)");
    $statement->execute(array($nome, $email));

    header("Location: index.php"); 
    exit();
?>