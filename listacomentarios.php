<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <title>Comentários listados</title>
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

      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>comentário</th>
                </tr>
        </thead>
    <?php 
    session_start();
   
        require_once "conexao.php";
        require_once "UsuarioEntidade.php";

        $conn = new Conexao();

        $stmt = $conn->conexao->prepare("SELECT * FROM comentario");
        if ($stmt->execute()) {
        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        echo "<td>" . $rs->nome. "</td>";
        echo "<td>" . $rs->comentario . "</td>";
        echo "<tr>";
        }
        }

    
 ?>
</table>

</body>
<footer>
  Trabalho Final - Biblioteca
</footer>
</html>