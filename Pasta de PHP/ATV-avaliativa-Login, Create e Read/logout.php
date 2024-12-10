<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie('login', '', -3600, '/');
    setcookie('senha', '', -3600, '/');
    header('Location: index.php');
?>