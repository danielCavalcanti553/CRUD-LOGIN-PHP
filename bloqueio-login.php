<?php
    // se não existir nomeUsuario, redireciona para index
    if(!isset($_SESSION["idUsuario"]))
        header("Location: index.php?erro=102");
    // isset -> Verifica se foi criada
?>