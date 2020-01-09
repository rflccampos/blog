<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - Novo Post</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-md-8 offset-md-2">
            <h1>Novo Post</h1>
                <form action="manterpost.php/add" class="mt-4">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control mt-2" placeholder="Título">
                        <input type="text" name="preview" class="form-control mt-2" placeholder="Preview">
                        <textarea name="conteudo" cols="30" rows="10" class="form-control mt-2" placeholder="Conteúdo"></textarea>
                        <input type="text" name="autor" class="form-control mt-2" placeholder="Autor">
                        <input type="submit" value="Postar" class="form-control mt-4 btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>