<?php
    
    $host = 'localhost';
    $usuario = 'root';
    $senha = 'usbw';
    $banco = 'floriculturabd';

    //Conexão mysqli 2

    // Conectar ao banco de dados
    $connection = mysqli_connect($host, $usuario, $senha, $banco);
    // Verificar se a conexão foi bem-sucedida
    if (!$connection) {
        die('Erro na conexão: ' . mysqli_connect_error());
    }
    echo "Conexão bem-sucedida!";

?>