<?php

    require_once("../inc/coneccao.php");
    $sql1 = "SELECT * FROM livro WHERE ISBN = '$livro_isbn'";
    $result = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($result);
?>