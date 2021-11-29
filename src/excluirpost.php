<?php
    include "mysqli_connect.inc";

    $id = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id = $id;";
    $res = mysqli_query($mysqli,$sql);
    $post = mysqli_fetch_array($res);

    unlink($post["midia"]);

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