<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícia Detalhada</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        include 'header.php';
        include '../script/db_conn.php';
        loadHeader() ;

        if (!isset($_SESSION)) {
            session_start();
        }

        
        $id = intval($_GET['id']);
        $sql_query = $conn->query("SELECT * FROM noticias WHERE id = $id");
        $noticia = $sql_query->fetch_assoc();
        
        
        list($ano, $mes, $dia) = explode("-", $noticia['publicacao']);
        
        if (!isset($_SESSION['login']) and $noticia['aprovado'] == 0) {
            echo '<p class="text-center text-danger">você precisa estar logado para ler essa noticia</p>';
            exit;
        }
    ?>

    <div class="container my-4">

        <header class="mb-4">
            <h1 class="text-center"><?php echo $noticia['titulo']?></h1>
            <p class="text-center text-muted">Publicado em <?php echo $dia.'/'.$mes.'/'.$ano;?></p>
        </header>

        <div class="text-center mb-4">
            <img src="/noticias-php<?php echo $noticia['imagem'];?>" class="img-fluid rounded" alt="Imagem da notícia" style="width: 800px; height: 300px; object-fit: cover;" >
        </div>

        <article>
           <?php echo '<p>'.$noticia['corpo'].'</p>'?>
        </article>

        <div class="text-center mt-4">
            <a href="<?php if(isset($_SESSION['login'])) {echo "/noticias-php/paginas/approval-list.php";} else {echo "/noticias-php/paginas/index.php";}?>" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>