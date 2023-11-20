<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comentarios</title>
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
<body class="bg-light">
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

<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <h1 class="text-center">Página de Comentários</h1>
       
            <form action="" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome">
                 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comentário</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name ="comentario" rows="3"></textarea>
                </div>
                             
                <button type="submit" class="btn btn-primary">Comentar</button>
              </form>
             <a href="listacomentarios.php"><button type="button" class="btn btn-primary">Listar comentarios</button></a>
        </div>
    </div>
    <?php
  session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "conexao.php";
        require_once "UsuarioEntidade.php";

        $conn = new Conexao();

          $sql = "INSERT INTO comentario(nome,comentario) VALUES  (?,?)";
          $stmt = $conn->conexao->prepare( $sql);

          $stmt->bindParam(1, $_POST["nome"]);
          $stmt->bindParam(2, $_POST["comentario"]);

          $resultado = $stmt->execute();

          echo("Comentário registrado com sucesso!");
    }        
    
 ?>
</div>

</body>

<footer>
    Trabalho Final - Biblioteca
</footer>
</html>