<?php
    session_start();

    //Verifica se veio do Formulário
    if(isset($_POST['login'])){
        //Verifica se o login esta correto
        include_once('connection.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuario WHERE email = '$login' and senha = '$senha' ";
        $resultado = mysqli_query($connection, $sql);
        // Verifica se há registro
        if (mysqli_num_rows($resultado) > 0){
            //Converte em array Associativo
            $linha = mysqli_fetch_assoc($resultado);
            //Grava os dados na sessão
            $_SESSION['login'] = $linha['email'];
            $_SESSION['senha'] = $linha['senha'];
        }else{
            $_SESSION['erro'] = 'Login ou senha invalidos.';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_2.css">
</head>
<body>
    <div>
        <div class="espaço">
            <form action='ADusuario.php' method="POST">
                <h3>Novo usuario</h3>
                <label>cliente: </label>
                <input type='text' name="nome">
                <br>
                <label>Email: </label>
                <input type='text' name="email">
                <br>
                <label>Senha: </label>
                <input type='number' name="senha">
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="registro">
            <?php
                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM usuario ORDER BY nome ASC";
                $usuario = mysqli_query($connection, $sql);
                // Verificar se há registros
                if (mysqli_num_rows($usuario) > 0) {
                    while ($linha = mysqli_fetch_assoc($usuario)) {
                        echo " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . "<br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }
            ?>
        </div>
        <div class="espaço">
            <form action='ADproduto.php' method="POST">
                <h3>Novo produto</h3>
                <label>Nome do produto: </label>
                <input type='text' name="nomeProdu">
                <br>
                <label>Preço: </label>
                <input type='number' name="valor">
                <br>
                <input name="descricao" placeholder = "escreva aqui a descrição do produto">
                <br>
                <input type="submit">
            </form>
        </div>
        <div class="registro">
            <?php
                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM produtos ORDER BY nome ASC";
                $produtos = mysqli_query($connection, $sql);
                // Verificar se há registros
                if (mysqli_num_rows($produtos) > 0) {
                    while ($linha = mysqli_fetch_assoc($produtos)) {
                        echo "Nome: " . $linha['nome'] . " - preço: " . $linha['preco'] . "R$ - Descrição: " . $linha['descricao'] . "<br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }
                //"ID: " . $linha['id'] . 
            ?>
        </div>
        <div class="form4">
            <?php
            if(isset($_SESSION['login']) and isset($_SESSION['senha'])){

            echo "<form action='cookie.php' method='POST'>
                    <input type='submit' value='SALVAR' style='background-color:#ADD8E6'>
                </form>";
            echo "<form class='sair' action='logout.php' method='POST'>
                    <input type='submit' value='SAIR' style='background-color:red'>
                </form>";
            }else{
            header('Location: index.php');
            }
            ?>
        </div>
    </div>
</body>
</html>