<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>approval</title>
</head>

<body>

    <?php include 'header.php'; loadHeader()?>
    <?php include '../script/db_conn.php'; ?>


    <?php 
        if(!isset($_SESSION)) {
            session_start();
        }

        if(!isset($_SESSION['login'])) {
            header("location: /noticias-php/paginas/index.php");
        } 
    ?>

    <div class="container my-4">
        <h1 class="text-center mb-4">Noticias Pendentes</h1>
        <div class="row g-4">

        <?php
            $sql_query = $conn->query("SELECT * FROM noticias WHERE aprovado = 0");

            while ($noticia = $sql_query->fetch_assoc()) {
                echo "
                    <div class='col-md-6 col-lg-4'>
                        <div class='card shadow-sm h-100'>
                            <img src='..". $noticia['imagem'] ."' class='card-img-top' alt='Imagem da Notícia' style='width: 100%; height: 200px; object-fit: cover;'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $noticia['titulo'] . "</h5>
                                <p class='card-text'>" . $noticia['descricao'] . ". Saiba mais clicando no botão abaixo.</p>
                                <a href='/noticias-php/paginas/read.php/?id=". $noticia['id'] ."' class='btn btn-primary'>Leia mais</a>
                                <a href='/noticias-php/script/approve.php/?id=". $noticia['id'] ."' class='btn btn-success'>Aprovar</a>
                                <a href='/noticias-php/script/delete.php/?id=". $noticia['id'] ."' class='btn btn-danger'>Reprovar</a>
                            </div>
                        </div>
                    </div>
                ";
            }
        ?>
    </div>
</body>
</html>