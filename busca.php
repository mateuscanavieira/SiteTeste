<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Busca</title>
  <!--CDN Scripts Bootstrap e Jquery-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="buscando.js"></script>
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
      <a class="nav-item nav-link active" href="paginaInicial2.php">Página Inicial<span class="sr-only">(Página atual)</span></a>
      <a class="nav-item nav-link" href="comentarios.php">Bate-Papo</a>
      <a class="nav-item nav-link" href="cadastros.php">Cadastro</a>
      <a class="nav-item nav-link" href="sobre.html">Sobre</a>
      
    </div>
  </div>
</nav>

<h1>Livros</h1>
<form action="" method="POST">
<input type="text" id="searchInput" name="pesquisa" vplaceholder="Buscar por nome ou número" class="form-control">
<button type="submit" class="btn btn-primary">Buscar</button>
</form>
<div id="bookList">
    <!-- Aqui serão exibidos os resultados da busca -->


    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $pesquisa = $_POST["pesquisa"];
      if($pesquisa==""){
        echo "<table id='example' class='table table-striped' style='width:100%'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Autor</th>";
        echo "<th>Resumo</th>";
        echo "<th>Capa</th>";
        echo "</tr>";
        echo "</thead>";
          
          session_start();
        
              require_once "conexao.php";
              require_once "UsuarioEntidade.php";

              $conn = new Conexao();
              
              $stmt = $conn->conexao->prepare("SELECT * FROM livro");
              if ($stmt->execute()) {
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>" . $rs->nomelivro. "</td>";
                echo "<td>" . $rs->autor . "</td>";
                echo "<td>" . $rs->resumo . "</td>";
                //echo "<td>" . $rs->capa .  "</td>";
                echo "<td>";
                echo '<img src="' . $rs->capa . '" style="max-width: 200px; max-height: 300px;">';
                echo "</td>";
                echo "<tr>";
                }
              }
      }else{
        
              // Texto que você deseja buscar
              //$texto_busca = "texto_que_voce_busca";

              // Query SQL para buscar o texto na tabela
              session_start();
        
              require_once "conexao.php";
              require_once "UsuarioEntidade.php";

             /*$conn = new Conexao();
              
              $stmt = $conn->prepare("SELECT * FROM livro WHERE nomelivro LIKE '%$pesquisa%'"); // O % é um curinga que indica qualquer sequência de caracteres
              */



              echo "<table id='example' class='table table-striped' style='width:100%'>";
              echo "<thead>";
              echo "<tr>";
              echo "<th>Nome</th>";
              echo "<th>Autor</th>";
              echo "<th>Resumo</th>";
              echo "<th>Capa</th>";
              echo "</tr>";
              echo "</thead>";
              $pesquisa2 = "%".$pesquisa."%";
              $PDO = new PDO('mysql:host=localhost;dbname=trabalho', "root", "");
              $c = $PDO->prepare("SELECT * FROM livro WHERE nomelivro LIKE  ? ");
              $c->bindParam(1, $pesquisa2);
              //if ($stmt->num_rows > 0) {
                if ($c->execute()) {
                  // Exibindo os resultados encontrados
                  //while($row = $stmt->fetch_assoc()) {
                    while($rs = $c->fetch(PDO::FETCH_OBJ)) {
                      echo "<tr>";
                      echo "<td>" . $rs->nomelivro. "</td>";
                      echo "<td>" . $rs->autor . "</td>";
                      echo "<td>" . $rs->resumo . "</td>";
                      echo "<td>";
                      echo '<img src="' . $rs->capa . '" style="max-width: 200px; max-height: 300px;">';
                      echo "</td>";
                      echo "<tr>";
                  }
              } else {
                  echo "Nenhum resultado encontrado.";
              }
                    }
                  
    }   
 ?>
</table>

</div>




</body>
<footer>
    Trabalho Final - Biblioteca
</footer>
</html>