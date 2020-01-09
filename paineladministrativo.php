<?php        
    $url = $_SERVER['REQUEST_URI'];
	$url_array = explode('/',$url);
	if(end($url_array) == "logout") {
        session_start();
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
        <div class="row">
            <div class="col-10">
                <a href="manterpost.php/add" class="btn btn-secondary">Novo Post</a>
                <a href="posts.php" class="btn btn-secondary">Editar Post</a>
                <a href="paineladministrativo.php/logout" class="btn btn-secondary">Logout</a>  
            </div>
        </div>
    </div>    
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>