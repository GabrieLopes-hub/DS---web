<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conection BD</title>
</head>
<body>
    <form action='insertion.php' method="POST">
        <label>Nome: </label>
        <input type='text' name="nome">
        <br>
        <label>Email: </label>
        <input type='text' name="email">
        <br>
        <label>Senha: </label>
        <input type='text' name="senha">
        <br>
        <input type="submit">
    </form>
    <br><br><br>
    <?php
        include_once('conexão.php');
        echo '<br>';
        $sql = "SELECT * FROM funcionario ORDER BY nome ASC";
        $funcionario = mysqli_query($conexao, $sql);
        // Verificar se há registros
        if (mysqli_num_rows($funcionario) > 0) {
            while ($linha = mysqli_fetch_assoc($funcionario)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha
        ['nome'] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado.";
        }

    ?>
    <div>
        <div>display: flex</div>
        <div></div>
    </div>
</body>
</html>