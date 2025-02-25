
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conexao.php" method="POST">
        <h3>Novo usuario</h3>
        <label>cliente: </label>
        <input type='text' name="nome">
        <br>
        <label>Email: </label>
        <input type='text' name="email">
        <input type="submit">
    </form>
    <?php
        $db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);

        foreach($todos as $linha){
            echo " linha: ".$linha['id'];
            echo " nome: ".$linha['nome'];
            echo " email: ".$linha['email'];
            echo "<br>";
        }
    ?>
</body>
</html>