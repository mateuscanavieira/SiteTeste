<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastros</title>

  <!--CDN Scripts Bootstrap e Jquery-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

  <!--CDN CSS Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
  <!--CSS criados pelo grupo-->
  <link rel="stylesheet" href="estiloTodos.css">
  <link rel="stylesheet" href="estiloPaginaInicial.css">
</head>

<body>
<!--Barra de menu cabeçalho da página-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">LAB - LIVRARIA AOS BRASILEIRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.html">Página Inicial<span class="sr-only">(Página atual)</span></a>
      <a class="nav-item nav-link" href="comentarios.html">Bate-Papo</a>
      <a class="nav-item nav-link" href="cadastros.html">Cadastro</a>
      <a class="nav-item nav-link" href="sobre.html">Sobre</a>
      
    </div>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <!-- Cadastro de Pessoas -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cadastro de Pessoas</h5>
          <p class="card-text">Clique no link abaixo para acessar o cadastro de pessoas:</p>
          <a href="cadastroPessoa.php" class="btn btn-primary">Ir para Cadastro de Pessoas</a>
        </div>
      </div>
    </div>

    <!-- Cadastro de Livros -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cadastro de Livros</h5>
          <p class="card-text">Clique no link abaixo para acessar o cadastro de livros:</p>
          <a href="cadastroLivro.php" class="btn btn-primary">Ir para Cadastro de Livros</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<footer>
  Trabalho Final - Biblioteca
</footer>
</html>