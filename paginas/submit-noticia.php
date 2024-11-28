<?php 

    include '../script/db_conn.php';

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $conteudo = $_POST['conteudo'];
    $data = date("y/m/d");

    echo $data;

    $sql_query = $conn->query("INSERT INTO noticias (titulo, descricao, corpo, imagem, publicacao, aprovado)
                VALUES ('$titulo', '$descricao', '$conteudo', NULL, '$data', 0)");

    header("location: index.php")
?>