<?php
    include('../inc/coneccao.php');

    $idcliente = $_GET['idcliente'];

    $sql = "DELETE FROM cliente WHERE idcliente = '$idcliente'";

    if (mysqli_query($conn, $sql)):
        header('Location: ../../apresentacao.php');
    endif;
?>