<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 2 Bimestre</title>
    <link rel="stylesheet" href="style/site.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    form {
        margin-top: 200px;
        margin-left: 450px;
        width: 500px;  
        text-align: center;
        align-items: center;
        border-radius: 10px;
        display: flexbox;
        border-style: solid;
        background-color: black;
    }
    form input {
        border-radius: 10px;
    }

    form p {
        color: white;
    }
</style>
<body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="cadastro.php">Cadastro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro.php">Cadastro</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
        <form method="POST">
            <p>Usuário:</p><input type="text" name="usuario" placeholder="usuario">
            <p>Senha:</p><input type="password" name="senha" placeholder="senha"><br><br>
            <input class="btn btn-primary" type="submit" name="inserir" value="Inserir"><br><br><br>
            <a href="login.php">Login</a>
          </form>
    </form>
    <?php
    $conexao = mysqli_connect("localhost","root","","login") or die("Erro de Conexão");

    $id = $_POST['id'];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $botaoCadastro = $_POST["inserir"];

    if($botaoCadastro == "Inserir"){
        if($usuario == "" || $senha == ""){
            echo "Campos não preenchidos!";
        }
        else {
            $sql = "INSERT INTO contascriadas(id, usuario, senhas) VALUES ('$id','$usuario','$senha');";
            mysqli_query($conexao, $sql);
        }
    }
    
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>