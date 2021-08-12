<?php
    require_once("validacao.php");
    $_SESSION["isbn"] = $_POST["isbn"];
    $_SESSION["titulo"] = $_POST["titulo"];
    $_SESSION["autor"] = $_POST["autor"];
    $_SESSION["categoria"] = $_POST["categoria"];

   $filter = Filtro1($_SESSION["autor"]);
   $filter += Filtro1($_SESSION["categoria"]);
    if($filter != 0){
        echo  "<script>alert('Você digitou um caractere inválido, tente novamente!');</script>";
        echo  "<script>window.location ='../../livro.php'</script>";

    }
    else{
        $isbn = $_SESSION["isbn"];
        $titulo = $_SESSION["titulo"];
        $autor = $_SESSION["autor"];
        $categoria = $_SESSION["categoria"];
    }
?>