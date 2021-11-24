<?php
    $id = $_GET["id"];

    include "mysqli_connect.inc";

    $sql = "DELETE FROM posts WHERE id = '$id';";
    mysqli_query($mysqli, $sql);
    $sql = "SELECT * FROM posts WHERE id = '$id'";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    if ($linhas != 0){
        echo "Erro ao apagar!";
        header("Location: index.php");
    }else{
        echo "Excluído com sucesso!";
        header("Location: index.php");
    }
    mysqli_close($mysqli);
?>