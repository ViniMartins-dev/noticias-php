<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <title>write</title>
</head>
    
<body>

    <?php 
        if(!isset($_SESSION)) {
            session_start();
        }

        if(!isset($_SESSION['login'])) {
            header("location: /noticias-php/paginas/index.php");
        } 
    ?>

    <div class="container my-4">
        <h1 class="text-center mb-4">Escrever Nova Notícia</h1>

        <form action="/noticias-php/script/submit-noticia.php" method="POST" enctype="multipart/form-data">

            <div class="row mb-3">

                <div class="col-md-8">
                    <label for="titulo" class="form-label">Título da Notícia</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título"
                        required>
                </div>


                <div class="col-md-4">
                    <label for="imagem" class="form-label">Imagem da Notícia</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" >
                </div>
            </div>


            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição Breve</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"
                    placeholder="Digite uma descrição breve da notícia" required></textarea>
            </div>


            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo Completo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="8"
                    placeholder="Digite o conteúdo completo da notícia" required></textarea>
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-success">Publicar Notícia</button>
                <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>