<?php
    include "auth.inc";
    include "mysqli_connect.inc";

    $iduser = $_GET["iduser"];
    $idpost = $_GET["idpost"];
    $idcomm = $_GET["idcomm"];

    if (!empty($idpost)){
        $sql = "DELETE FROM curtidas WHERE id_usuario = " .$iduser. " AND id_post = " .$idpost. ";";
        mysqli_query($mysqli, $sql);
    }
    elseif (!empty($idcomm)){
        $sql = "DELETE FROM curtidas WHERE id_usuario = " .$iduser. " AND id_comentario = " .$idcomm. ";";
        mysqli_query($mysqli, $sql);

        $sql = "SELECT * FROM comentarios WHERE id=" .$idcomm. ";";
        $res = mysqli_query($mysqli, $sql);
        $com = mysqli_fetch_array($res);
        $idpost = $com["id_post"];
    }

    header("Location: comentarios.php?idpost=$idpost");

    mysqli_close($mysqli);
?>