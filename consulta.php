
<?php

include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);


mysqli_close($conexao);

?>
<!doctype html>
<html lang="br">
<head>
    <!-- Required meta tags -->
    <title>Bolo Doce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <header id="cabecalho">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: red">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img  alt=""></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listaBolos.html">Bolos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disable="false">Cadastro</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </header>
    
  <div class="container">
        <nav>
            <ul class="menu">
              <a href="index.php"><li>Cadastro</li></a>
              <a href="consulta.php"><li>Consultas</li></a>  
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <?php
            
            print "$registros registros encontrados.";
          

            ?>
          
        </section>
    </div>
    <footer>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Copyright 2019</h1>
          <p class="lead">Ricardo Carvalho/Vitor Duran - Facebook | Twitter</p>
        </div>
      </div>
    </footer>
    <script src="js/cadastro.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
