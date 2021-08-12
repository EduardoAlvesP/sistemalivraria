<?php
    require_once('../inc/coneccao.php');


    $ISBN = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

   
    $sql  = "UPDATE livro SET  titulo = '" . $titulo ."' , autor = '". $autor ."', categoria = '" . $categoria."' WHERE ISBN = '". $ISBN . "'";
    if (mysqli_query($conn, $sql)){
        header('Location: ../../apresentacao.php');
    }       
    else{
        echo "errou";
    }
        

    
?>