<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
    <title>Editar</title>

</head>
<body>
    <?php
        require_once("php/inc/coneccao.php");
        require_once("php/inc/header.php");

        $ISBN =  $_GET["ISBN"];

        $sql = "SELECT * from livro WHERE ISBN = '$ISBN'";
        $result = mysqli_query($conn, $sql);
        $lista = mysqli_fetch_array($result);

    ?>

    <main>
        <form action="php/controller/update.php" method="post" id="envio" name="envio" class="formul rounded input-group input-group-sm">
                <h1 class="display-5 rounded-top"> Editar Livro </h1>
        
        
                <h2>Livro</h2>
                <div class="row">
                    <div class="col">
                        <label for="isbn"> ISBN: </label>
                        <input type="text" name="isbn" id="isbn" placeholder="ISBN" class="form-control" value="<?php echo $ISBN; ?>" readonly/>
                    </div>
        
                    <div class="col">
                        <label for="titulo"> Título: </label>
                        <input type="text" name="titulo" id="titulo" placeholder="Título" class="form-control" value="<?php echo $lista['titulo']; ?>" autofocus="" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="autor"> Autor: </label>
                        <input type="text" name="autor" id="autor" placeholder="Autor" class="form-control" value="<?php echo $lista['autor']; ?>" />
                        <input type="submit" value="Enviar" class="btn btn-dark"></button>
                    </div>
        
                    <div class="col">
                        <label for="categoria"> Categoria: </label>
                        <input type="text" name="categoria" id="categoria" placeholder="Categoria" class="form-control" value="<?php echo $lista['categoria']; ?>" />
                    </div>
                </div>
            </form>
    </main>
</body>
</html>