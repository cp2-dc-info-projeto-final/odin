<?php
    include "mysqli_connect.inc";

    $id = $_GET["id"];

    $sql = "SELECT * FROM comentarios WHERE id=" .$id. ";";
    $res = mysqli_query($mysqli, $sql);
    $com = mysqli_fetch_array($res);
    $idpost = $com["id_post"];

    $sql = "DELETE FROM curtidas WHERE id_comentario = '$id';";
    mysqli_query($mysqli, $sql);

    $sql = "DELETE FROM comentarios WHERE id = '$id';";
    mysqli_query($mysqli, $sql);
    $sql = "SELECT * FROM comentarios WHERE id = '$id'";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    if ($linhas != 0){
        echo "Erro ao apagar!";
        header("Location: index.php");
    }else{
        echo "Excluído com sucesso!";
        header("Location: comentarios.php?idpost=$idpost");
    }
    mysqli_close($mysqli);
?>