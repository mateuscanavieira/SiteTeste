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


  <!--Scripts desatulizados Jquery--> 
  <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->

  <!--CDN CSS Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
  <!--CSS criados pelo grupo-->
  <link rel="stylesheet" href="estiloTodos.css">
  <link rel="stylesheet" href="estiloPaginaInicial.css">
 
</head>
<body>
<!--Barra de menu cabeçalho da página-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navprincipal">
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

<header id="noticias">
  <div>
    <h1>Notícias do mundo da Literatura</h1>
  </div>
</header>


<main id="main-news">
  <section id="news-section">
    <h1>Últimas Notícias</h1>
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

  <section id="login-section">


    <form action="" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuário</label>
        <input type="text" class="form-control" name="cpf" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuário (CPF)">
        <small id="emailHelp" class="form-text text-muted">Entre com o usuário criado, para uma experiência completa.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
      </div>
      <button type="submit" class="btn btn-primary" id="loginbotao">Entrar</button>
    </form>
  </section>
  </main>
<!-- Botões no Final da Página -->

<?php
    session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["cpf"]) && isset($_POST["senha"])) {
        require_once "conexao.php";
        require_once "UsuarioEntidade.php";
        
        $senhaok = md5($_POST["senha"]);
        $conn = new Conexao();

        $sql = "SELECT * FROM usuarios WHERE cpf = ? and senha = ?";
        $stmt = $conn->conexao->prepare( $sql );

        $stmt->bindParam(1, $_POST["cpf"]);
        $stmt->bindParam(2, $senhaok);

        $resultado = $stmt->execute();

        if($stmt->rowCount() == 1) {

            $usuario = new UsuarioEntidade();
            
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                $usuario->setCpf($rs->cpf);
                $usuario->setNome($rs->nome);
            }

            $_SESSION["login"] = "1";
            $_SESSION["usuario"] = $cpf;
            header("Location: paginaInicial2.php");

        }
        else {
            echo "Usuário ou senha inválidos";
        }
    }
  }
?>


<script src="arrumandoTudo.js"></script>
</body>
<footer>
  Trabalho Final - Biblioteca
</footer>
</html>