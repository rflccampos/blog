<?php
    require_once "Helpers/conexao.php";
    require_once "Models/Usuario.php";

    session_start();

	if(isset($_SESSION['login'])) {
		header("location: /paineladministrativo.php");
	}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $usuario->setLogin($login);
        $usuario->setSenha($senha);
        $id = $usuario->login();
        if($id != NULL) {
            session_start();
            $_SESSION['login'] = $login;                  
            $_SESSION['usr_id'] = $id;
            header("location: /paineladministrativo.php");
        }
        else {
            echo "Usuario ou Senha inválidos";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Rafael Campos - email: rflccampos@gmail.com">
    <title>Blog - Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="container-fluid">
        <?php include_once "cabecalho.php"; ?>
        <div class="row">
            <div class="col-10 offset-1 col-md-6 offset-md-3 mt-4">
                <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" name="login" class="form-control" placeholder="Login">
                    <input type="password" name="senha" class="form-control mt-2" placeholder="Senha">
                    <input type="submit" value="Entrar" class="form-control mt-2 btn btn-secondary">
                </div>                    
                </form>
            </div>
        </div>    
    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>