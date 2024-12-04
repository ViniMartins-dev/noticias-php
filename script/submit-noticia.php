<?php 

    include '../script/db_conn.php';



    $imagem = $_FILES['imagem']['name'];
    $diretorio = "/imagens/"; 
    $caminhoTemp = $_FILES['imagem']['tmp_name']; 
    $destino = $diretorio . basename($imagem);
    

    move_uploaded_file($caminhoTemp, $destino);

        
        


    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $conteudo = $_POST['conteudo'];
    $data = date("y/m/d");

    $sql_query = $conn->query("INSERT INTO noticias (titulo, descricao, corpo, imagem, publicacao, aprovado)
                VALUES ('$titulo', '$descricao', '$conteudo', '$destino', '$data', 0)");

    echo 'sua noticia será enviada para análise...</br> Renornando à página principal';
    header('Refresh: 3; URL=/noticias-php/paginas/index.php');


?>