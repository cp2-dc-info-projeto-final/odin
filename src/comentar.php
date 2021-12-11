<?php
    include "auth.inc";
    include "mysqli_connect.inc";

    $fuso = new DateTimeZone('Etc/GMT+3');
    $data_hora = new DateTime("now", $fuso);
    $data_hora = $data_hora->format("Y-m-d H:i");

    $id_post = $_POST["idpost"];
    $id_usuario = $_POST["iduser"];
    $texto = $_POST["comentario"];

    $erro = 0;

    if (strlen($texto) > 200){
        echo "Texto maior que 200 caracteres.";
        $erro = 1;
    }

    if (empty($texto)){
        echo "Postagem vazia!";
        $erro = 1;
    }

    if ($erro == 0){
        $sql = "INSERT INTO comentarios (id_usuario, id_post, data_hora, texto) ";
        $sql .= "VALUES ('$id_usuario', '$id_post', '$data_hora', '$texto');";
        mysqli_query($mysqli, $sql);
        echo "Seu comentário foi postado!";

        header("Location: comentarios.php?idpost=$id_post");
    }

    mysqli_close($mysqli);
?>