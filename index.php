<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Rafael Campos - email: rflccampos@gmail.com">
    <title>Blog - Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="container-fluid">
        <?php include_once "cabecalho.php"; ?>
        <div class="row">
            <div class="col-12">
                <ul>
                    <?php
                        require_once "Models/Post.php";
                        $posts = new Post();
                        $posts = $posts->listar();
                        
                        foreach($posts as $post) :
                    ?>
                            <li><?php echo $post['titulo']; ?></li>                    
                        <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>