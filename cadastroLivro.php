<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livro</title>
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
      <a class="nav-item nav-link active" href="index.php">Página Inicial<span class="sr-only">(Página atual)</span></a>
      <a class="nav-item nav-link" href="comentarios.php">Bate-Papo</a>
      <a class="nav-item nav-link" href="cadastros.php">Cadastro</a>
      <a class="nav-item nav-link" href="sobre.html">Sobre</a>
      
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2>Cadastro de Livros</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="tituloLivro">Título do Livro:</label>
      <input type="text" class="form-control" id="tituloLivro" name="nomelivro" placeholder="Digite o título do livro" required>
    </div>

    <div class="form-group">
      <label for="autorLivro">Autor do Livro:</label>
      <input type="text" class="form-control" name="autor" id="autorLivro" placeholder="Digite o nome do autor" required>
    </div>

    <div class="form-group">
      <label for="resumoLivro">Resumo do Livro:</label>
      <textarea class="form-control" id="resumoLivro" rows="4" name="resumo" placeholder="Digite o resumo do livro" required></textarea>
    </div>

    <div class="form-group">
    <label for="imagem">Capa do livro (link de acesso online):</label>
    <input type="text" name="capa" id="capa">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar Livro</button>
  </form>
  <?php
  session_start();
       
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once "conexao.php";
        require_once "UsuarioEntidade.php";


        $conn = new Conexao();

          $sql = "INSERT INTO livro(nomelivro,autor,resumo,capa) VALUES  (?,?,?,?)";
          $stmt = $conn->conexao->prepare( $sql);

          $stmt->bindParam(1, $_POST["nomelivro"]);
          $stmt->bindParam(2, $_POST["autor"]);
          $stmt->bindParam(3, $_POST["resumo"]);
          $stmt->bindParam(4, $_POST["capa"]);

          $resultado = $stmt->execute();

          echo("Livro cadastrado com sucesso!");
    }        
    
 ?>
</div>



</body>

<footer>
  Trabalho Final - Biblioteca
</footer>
</html>