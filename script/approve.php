<?php

    include 'db_conn.php';

    $id = $_GET['id'];

    aprovar($id);

    header("Location: /noticias-php/paginas/approval-list.php");
?>
