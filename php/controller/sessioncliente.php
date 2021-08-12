<?php
    require_once("validacao.php");
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["livro_isbn"] = $_POST["livro_isbn"];

    $filter2 = Filtro1($_SESSION["nome"]);
    if($filter2 !=0){
        echo  "<script>alert('Caractere inserido inválido, tente novamente!');</script>";
        echo  "<script>window.location ='../../cliente.php'</script>";
    }
    else{
        $nome = $_SESSION["nome"];
        $livro_isbn = $_SESSION["livro_isbn"];
}
?>