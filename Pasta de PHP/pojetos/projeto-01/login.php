<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"]; #Este codigo torna o resultado do input do index.php em uma variavel em PHP
    $usuariocorre = "aluno";
    $senhacorre = "sesi";
    ?>
<?php
if($usuario === $usuariocorre && $senha === $senhacorre   ){ 
    # === no PHP compara uma variavel e o && e o mesmo que "end" no python e html


    echo "<h1> Logado com sucesso</h1>";

}

else{
    echo "<h1>Usuario ou senha incorretos.</h1>";
}

?>
<html>

<form action="index.php">
<input type="submit" value="voltar">

</form>

</html>