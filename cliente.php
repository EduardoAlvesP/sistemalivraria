<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
    <title>Cadastro Cliente</title>
    
</head>
<body >
    <?php
    require_once("php/inc/header.php");
    ?>  
    <main>
        <form action="php/controller/inserir.php" method="post" id="envio" name="envio" enctype="multipart/form-data" class="input-group input-group-sm formul round">
            <h1 class="display-5 round-top"> Cadastro Cliente </h1> 
            <h2>Cliente</h2>
            <div class="row">
                <div class="col">
                    <label for="nome"> Nome: </label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" required/>
                    <input type="submit" value="Enviar" class="btn btn-dark" onclick = ></button>
                </div>
    
                <div class="col">
                    <label for="livro_isbn"> ISBN </label>
                    <input type="text" name="livro_isbn" id="livro_isbn" placeholder="ISBN" class="form-control" autofocus="" required/>
                </div>
            </div>
            <input type="hidden" id="aux" name="aux" value="2">
        </form>
</main>


   
</body>
</html>