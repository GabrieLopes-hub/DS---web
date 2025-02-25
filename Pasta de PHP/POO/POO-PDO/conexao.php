<?php
    //MySQL
    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

    //var_dump($bd);
    //echo "<br><br>";
    //print_r($bd);

    //exmplo de consulta com uma linha
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC); //todos os registros retornados

    print_r($todos);
    echo "<br>";
    echo $todos['email'];

    echo "<br><br>";

    //exmplo de consulta com muitas linhas
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC);

    foreach($todos as $linha){
        echo " linha: ".$linha['id'];
        echo " nome: ".$linha['nome'];
        echo " email: ".$linha['email'];
        echo "<br>";
    }

    //inserindo dados
    $statement = $db prepare("INSERT INTO clientes(nome, email) VALUES (?, ?)");

    $statement->execute(array("Gabriel", "gabriel1234@gmail.com"));
    $statement->execute(array("Robson", "robson1234@gmail.com"));
    $statement->execute(array("Cleiton", "cleiton1234@gmail.com"));
?>