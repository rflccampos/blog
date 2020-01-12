<?php
    require_once "./Models/Post.php";

    session_start();

    if(!isset($_SESSION['login'])) {        
		header("location: /login.php");
	}

    $url = $_SERVER['REQUEST_URI'];
    $url_array = explode("/", $url);
    
    if($url_array[2] == "add") {
        $acao = "add";
    } else if($url_array[2] == "edit") {
        $acao = "edit";
    } else {
        header("location: /");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $post = new Post();
        $post->setTitulo($_POST['titulo']);
        $post->setPreview($_POST['preview']);
        $post->setConteudo($_POST['conteudo']);
        $post->setAutor($_POST['autor']);        
        $post->setData(date("Y-m-d H:i:s"));
        $post->setPublicador($_SESSION['usr_id']);

        if($post->inserir()) {
            echo "  <script>
                        alert('Post Adicionado!');
                        window.location.href='/';
                    </script>";            
        }
        else
            echo "<script>alert('Erro ao postar');</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - Novo Post</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

    <div class="container-fluid">
        <?php include_once "cabecalho.php"; ?>
        <div class="row">
            <div class="col-10 col-md-8 offset-md-2">
            <h1>Novo Post</h1>
                <form action="/manterpost.php/add" method="post" class="mt-4">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control mt-2" placeholder="Título">                        
                        <textarea name="preview" cols="30" rows="5" class="form-control mt-2" placeholder="Preview"></textarea>
                        <textarea name="conteudo" cols="30" rows="10" class="form-control mt-2" placeholder="Conteúdo"></textarea>
                        <input type="text" name="autor" class="form-control mt-2" placeholder="Autor">
                        <input type="submit" value="Postar" class="mt-4 btn btn-secondary">
                        <a href="/paineladministrativo.php" class="mt-4 btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>