<?php

    include 'db_conn.php';

    $id = $_GET['id'];

    deletar($id);

    header("Location: /noticias-php/paginas/approval-list.php");

?>