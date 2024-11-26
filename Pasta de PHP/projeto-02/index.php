
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
        <h1>Calculadora</h1>
        
        <label for="num1">escolha um número:</label>
        <input name="num1" type="number" id="num1" placeholder="Número" min="0" max="9999" required>

        <label for="num2">escolha um número:</label>
        <input name="num2" type="number" id="num2" placeholder="Número" min="0" max="9999" required>

        <label for="operacao">Operação:</label>
        <select name="opera" id="operacao">
            <option value="">escolha</option>
            <option value="+">Soma +</option>
            <option value="-">Subtração -</option>
            <option value="*">Multiplição *</option>
            <option value="/">Divisão /</option>
        </select><br><br>

        <input type="submit">

        <?php
        $resul = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nume1 = $_POST["num1"];
            $nume2 = $_POST["num2"];
            $opera = $_POST["opera"];
            
            $nume1 = (int)$nume1;
            $nume2 = (int)$nume2;

            if ($opera === "+") {
                $resul = $nume1 + $nume2;
                echo "Resultado: " . $resul;}
            if ($opera === "-") {
                $resul = $nume1 - $nume2; 
                echo "Resultado: " . $resul;}
            if ($opera === "*") {
                $resul = $nume1 * $nume2; 
                echo "Resultado: " . $resul;}
            if ($opera === "-") {
                $resul = $nume1 - $nume2; 
                echo "Resultado: " . $resul;}
            if ($opera === "/") {
                if ($nume1 === 0) {
                    echo "Não é possível dividir por 0";
                } 
                elseif ($nume2 === 0){
                    echo "Não é possível dividir por 0";
                }
                else {
                    $resultado = $nume1 / $nume2;
                    echo "Resultado: " . $resultado;}
            } 
        }
        ?>
    </form>
</body>
</html>