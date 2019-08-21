<?php
    session_start();
    
    // remove todoas as variáveis
    session_unset();
    // destrói a sessão
    session_destroy();
    header("Location: index.php");
?>