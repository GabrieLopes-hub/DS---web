<?php
    $idadeUser = 10;

    //Incluindo o cabeçalho
    include('head.html');

    //Incluindo o corpo
    if($idadeUser >= 16){
        include('body.html');
    }
    else{
        include('body2.html');
    }

    //Incluindo o rodapé
    include('footer.html');

    //Incluindo corpo php
    include('body.php');

?>