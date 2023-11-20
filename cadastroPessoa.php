<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoa</title>

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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <form id="cadastroForm" action="" method="POST">
        <div><h1> Faça o seu cadastro</h1></div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>

        <div class="form-group">
            <label for="confirmarSenha">Confirmar Senha:</label>
            <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <?php
  session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "conexao.php";
        require_once "UsuarioEntidade.php";
       
        $senha = $_POST["senha"];
        $confirmasenha = $_POST["confirmarSenha"];

        $conn = new Conexao();
        if ($senha == $confirmasenha){
          
          $senhaok = md5($senha);

          $sql = "INSERT INTO usuarios(cpf,nome,senha,email) VALUES  (?,?,?,?)";
          $stmt = $conn->conexao->prepare( $sql);

          $stmt->bindParam(1, $_POST["cpf"]);
          $stmt->bindParam(2, $_POST["nome"]);
          $stmt->bindParam(3, $senhaok);
          $stmt->bindParam(4, $_POST["email"]);

          $resultado = $stmt->execute();

          echo("Usuário cadastrado com sucesso!");
        }else{
          echo("Não foi possível confirmar as senhas digitadas!");
        }
    }
 ?>
</div>



</body>

<footer>
    Trabalho Final - Biblioteca
</footer>
</html>