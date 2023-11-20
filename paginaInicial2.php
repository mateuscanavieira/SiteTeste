<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pagina inicial</title>

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
<?php
 session_start();
 if($_SESSION["login"]=="1"){
  echo "<script>alert('Seja bem vindo!');</script>";
 }else{
 header("location: index.php");
 }
?>

<!--Barra de menu cabeçalho da página-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">LAB - LIVRARIA AOS BRASILEIRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Página Inicial<span class="sr-only">(Página atual)</span></a>
      <a class="nav-item nav-link" href="comentarios.php">Bate-Papo</a>
      <a class="nav-item nav-link" href="cadastros.php">Cadastro</a>
      <a class="nav-item nav-link" href="sobre.html">Sobre</a>
      
    </div>
  </div>
</nav>

<header>
  <h1>Notícias do mundo da Literatura</h1>
</header>


<main>
  <section id="news-section">
    <h2>Últimas Notícias</h2>
    <article class="news-article">
      <h3>Autor de “Diário de uma Paixão” fala sobre fãs brasileiros, TikTok e cinema</h3>
      <p>Em nova visita ao Brasil, Nicholas Sparks também revelou que a adaptação de um dos seus livros será gravada no país </p>
      <p><img src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2023/10/Nicholas-Sparks-credito-Brad-Styron-1-e1697028385697.jpg?w=1220&h=674&crop=1"></p>
    </article>
    <article class="news-article">
      <h3>Análise: O problema com a “regra de três” do prêmio Nobel </h3>
      <p>Pesquisas cientifícas se tornaram mais colaborativas, o que dificulta seguir o regulamento Nobel de até três pessoas por prêmio; Especialistas debatem sobre por que há poucas mulheres laureadas </p>
      <p><img src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2021/06/16067_9D0947948961796A.jpg?w=1220&h=674&crop=1"></p>
    </article>

  </section>
  
  <div id="esconde" class="text-right p-3">
  <a href=busca.php><button id="biblio" class="btn btn-primary">Biblioteca</button><a>
    <br><br>
    <form action="" method="POST">
    <button id="submit" class="btn btn-primary">Sair</button>
  </div>
</form>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_destroy();
header("location: index.php");
}
?>

<script src="teste.js"></script>
</body>

<footer>
  Trabalho Final - Biblioteca
</footer>
</html>