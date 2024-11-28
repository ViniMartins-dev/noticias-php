<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notícia Detalhada</title>
  <!-- Link do CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include 'header.php'; loadHeader()?>
  <?php 
        if(!isset($_SESSION)) {
            session_start();
        }

        if(!isset($_SESSION['login'])) {
            header("location: index.php");
        } 
    ?>

  <div class="container my-4">
    <!-- Cabeçalho -->
    <header class="mb-4">
      <h1 class="text-center">Título da Notícia</h1>
      <p class="text-center text-muted">Publicado em 28 de novembro de 2024</p>
    </header>

    <!-- Imagem da Notícia -->
    <div class="text-center mb-4">
      <img src="https://via.placeholder.com/800x400" class="img-fluid rounded" alt="Imagem da notícia">
    </div>

    <!-- Conteúdo da Notícia -->
    <article>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. 
        Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
      </p>
      <p>
        Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. 
        Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
        per inceptos himenaeos. Curabitur sodales ligula in libero.
      </p>
      <p>
        Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. 
        In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. 
        Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.
      </p>
    </article>

    <!-- Botão para Voltar -->
    <div class="text-center mt-4">
      <a href="index.html" class="btn btn-primary">Voltar para Página Inicial</a>
      <a href="index.html" class="btn btn-success">Aprovar</a>
      <a href="index.html" class="btn btn-danger">Reprovar</a>
    </div>
  </div>

  <!-- Link do JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
