<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    function aprovar($id) {
        global $conn;
        $id = intval($id);

        $conn->query("UPDATE noticias SET aprovado = 1 WHERE id = $id");
    }

    function deletar($id) {
        global $conn;
        $id = intval($id);

        $conn->query("DELETE FROM noticias WHERE id = $id");
    }
?>