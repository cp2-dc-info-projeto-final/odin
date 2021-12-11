<?php
    include "auth.inc";
    include "mysqli_connect.inc";

    $id = $_POST["id"];
    $texto = $_POST["comentario"];

    $sql = "SELECT * FROM comentarios WHERE id=$id;";
    $res = mysqli_query($mysqli, $sql);
    $com = mysqli_fetch_array($res);
    $idpost = $com["id_post"];

    $erro = 0;

    if (strlen($texto) > 200){
        echo "Texto maior que 400 caracteres.";
        $erro = 1;
    }

    if (empty($texto)){
        echo "Postagem vazia!";
        $erro = 1;
    }

    if ($erro == 0){
        $sql = "UPDATE comentarios SET texto = '$texto' ";
        $sql .= "WHERE id = $id;";
        mysqli_query($mysqli, $sql);
        echo "Seu comentário foi atualizado!";

        header("Location: comentarios.php?idpost=$idpost");
    }

    mysqli_close($mysqli);
?>