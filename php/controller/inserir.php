<?php
session_name("infoPessoal");

session_start();

setcookie(session_name(),session_id(),time()+86400,"/");


require_once("../inc/coneccao.php");


if($_POST["aux"] == 1)
{
    require_once("sessionattcreator.php");



    $sql = "INSERT INTO livro (ISBN, autor, titulo, categoria) VALUES ('" . $isbn ."','" . $titulo . "','" . $autor . "','" . $categoria.  "')";
    if (mysqli_query($conn, $sql)):
        echo  "<script>window.location= '../../apresentacao.php'</script>";
        
    else:
        
        echo  "<script>alert('Houve um erro na inserção dos dados, tente novamente!');</script>";
        echo "<script>window.location ='../../livro.php'</script>";
        
    endif;

}
else if($_POST["aux"] == 2)
{
    require_once("sessioncliente.php");
    require_once("verificadorexiste.php");
    
    
    if($count > 0)
    {
        $sql = "INSERT INTO cliente (nome, livro_ISBN) VALUES ('" . $nome ."','" . $livro_isbn . "')";
        if (mysqli_query($conn, $sql)):
        echo "<script>window.location ='../../apresentacao.php'</script>";
    
        endif;
    }
    else{
        echo  "<script>alert('ISBN não foi cadastrado, tente novamente!');</script>";
        echo "<script>window.location ='../../cliente.php'</script>";   
    }
    
    
}


$_POST["aux"] = 0;


?>