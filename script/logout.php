<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    session_destroy();

    header("Location: /noticias-php/paginas/index.php");

?>
