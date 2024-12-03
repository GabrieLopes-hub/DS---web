<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conection BD</title>
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo geral do corpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container principal */
        .separado {
            display: flex;
            gap: 50px;
            max-width: 900px;
            width: 100%;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        /* Formulário estilizado */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        form label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
        }

        form input[type="text"],
        form input[type="number"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilo para a exibição dos registros */
        .registro {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 20px;
            font-size: 14px;
        }

        .registro p {
            margin-bottom: 10px;
            color: #555;
        }

        .registro span {
            font-weight: bold;
            color: #007bff;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .separado {
                flex-direction: column;
                align-items: center;
            }

            form {
                width: 100%;
                max-width: 400px;
            }

            .registro {
                width: 100%;
                max-width: 400px;
                margin-top: 20px;
            }
        }

    </style>
</head>
<body>
    <div class="separado">
        <div class="espaço">
            <form action='insertionClient.php' method="POST">
                <label>Nome do cliente: </label>
                <input type='text' name="nome">
                <br>
                <label>Email: </label>
                <input type='text' name="email">
                <br>
                <input type="submit">
            </form>
            <br><br><br>
            <div class="registro">
                <?php
                    include_once('conexão.php');
                    echo '<br>';
                    $sql = "SELECT * FROM clientes ORDER BY nome ASC";
                    $clientes = mysqli_query($conexao, $sql);
                    // Verificar se há registros
                    if (mysqli_num_rows($clientes) > 0) {
                        while ($linha = mysqli_fetch_assoc($clientes)) {
                            echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . "<br>";
                        }
                    } else {
                        echo "Nenhum registro encontrado.";
                    }
                ?>
            </div>
        </div>
        <div>
            <form action='insertionProdu.php' method="POST">
                <label>Nome do produto: </label>
                <input type='text' name="nomeProdu">
                <br>
                <label>Preço: </label>
                <input type='number' name="preço">
                <br>
                <label>Estoque: </label>
                <input type='number' name="estoque">
                <br>
                <input type="submit">
                <br><br><br>
                <div class="registro">
                    <?php
                    include_once('conexão.php');
                    echo '<br>';
                    $sql = "SELECT * FROM produtos ORDER BY nomeProdu ASC";
                    $produtos = mysqli_query($conexao, $sql);
                    // Verificar se há registros
                    if (mysqli_num_rows($produtos) > 0) {
                        while ($linha = mysqli_fetch_assoc($produtos)) {
                            echo " - Nome: " . $linha['nomeProdu'] . " - preço: " . $linha['valorProdu'] . " - estoque: " . $linha['estoque'] . "<br>";
                        }
                    } else {
                        echo "Nenhum registro encontrado.";
                    }
                    //"ID: " . $linha['id'] . 
                    ?>
                </div>

            </form>
        </div>
    </div>
</body>
</html>