<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <h1>Formulário</h1>

        <label for="aluno">Aluno:</label>
        <input type="text" required id="aluno" placeholder="Nome" autofocus>

        <Label for="N" id="num">N° da chamada</label>
        <input type="number" max="99" id="N" required placeholder="Número chamada">

        <label for="rm">RM:</label>
        <input id="rm" required type="number" placeholder="RM">

        <label for="patrimonio">Patrimônio da máquina:</label>
        <input type="number" max="9999999" id="patrimonio" required placeholder="Patrimônio">

        <Label for="N-maq">N° Máquina</label>
        <input type="number" max="99" id="N-maq" required placeholder="Número máquina">

        <label for="foto"></label>
        <input type="file" id="foto" required placeholder="Foto">

        <label for="st">ST(servicetag)</label>
        <input type="texte" maxlenght="7" required>

        <input class="fim" type="submit" value="cadastrar-se">
        <input class="fim" type="reset" value="resetar">
    </form>
</body>
</html>