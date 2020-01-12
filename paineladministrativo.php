<?php        
    session_start();    

    if(!isset($_SESSION['login'])) {        
		header("location: /login.php");
	}

    $url = $_SERVER['REQUEST_URI'];
	$url_array = explode('/',$url);
	if(end($url_array) == "logout") {        
        unset($_SESSION['login']);
		header("location: /login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - Painel Administrativo</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="container-fluid">
        <?php include_once "cabecalho.php"; ?>        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/manterpost.php/add">Novo Post</a>
                        <a class="dropdown-item" href="/posts.php">Editar/Excluir Post</a>                              
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paineladministrativo.php/logout">Logout</a>
                </li>
                </ul>
            </div>
        </nav>
        </nav>
    </div>    
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>