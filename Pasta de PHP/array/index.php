<?php
    include_once('arrays.php');

    $VariavelTexto ="sla";

    is_array($estado);
    if(is_array($estado)){
        echo "É uma array <br><br>";
    }
    else{
        echo"Não é uma array <br><br>";
    }

    /*Exemplo de uso do array_unshift() e array_push()*/
    array_unshift($estado, "Rio Grande do Sul");//adiciona no inicio
    array_push($estado, "Paraná");//adiciona no fim

    foreach($estado as $estadoLinha){
        echo $estadoLinha. '<br>';
    }


    echo '<br><br>';


    /*Exemplo de uso do array_shift() e array_push()*/ 
    $removido = array_shift($estado); //Remove no inicio
    echo $removido. '<br>';

    $removido = array_pop($estado); //Remove do final
    Echo $removido;

    echo '<br><br>';

    /*Exemplo de uso do in_array() */
    if(in_array("São Paulo", $estado)){
        echo "Estado encontrado";
    }
    else{
        echo "Estado não encontrado";
    }

    echo '<br>';

    /*Exemplo de uso do array_key_exists() */
    if(array_key_exists("RJ", $estado)){
        echo "Estado encontrado";
    }
    else{
        echo "Estado não encontrado";
    }
?>