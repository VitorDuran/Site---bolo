<?php  

include_once("conexao.php");
$resu;

try{

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cidade = $_POST['cidade'];
  $cep = $_POST['cep'];
  $cel = $_POST['cel'];
  $tel = $_POST['tel'];
  
  $sql = "INSERT INTO usuarios (nome,email,cidade,cep,cel,tel) values ('$nome','$email','$cidade','$cep','$cel','$tel')";
  $stnt = $conexao->prepare($sql);
  $stnt->execute();
  $resu = "Cadastrado com sucesso";
}catch(PDOException $e) {
  echo "Erro de inclusão: " . $e->getMessage();
  $resu = "Erro no cadastro";
} 
finally{
  $conexao = null;
}

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
<div class="conteiner">
        <div class="nav-bar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="listaBolos.html">Bolos</span></a>
            
          </li>
          <li><a class="link" href="">Entrar<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="cadastro.html"></i> Cadastro</a></li>
              <li><a class="link" href=""></i> Login</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="nav-mobile">
        <div class="menu-icon"> <span></span><span></span><span></span>
        </div>
      </div>
    </div>
 

    
    <br><br><br>
  <h1><?php echo $resu;?><span class="badge badge-secondary"></span></h1>
      

  

    <footer>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Copyright 2019</h1>
          <p class="lead">Ricardo Carvalho/Vitor Duran - Facebook | Twitter</p>
        </div>
      </div>
    </footer>
    
</body>
</html>
