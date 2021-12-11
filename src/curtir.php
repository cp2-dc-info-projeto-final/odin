<?php
    include "auth.inc";
    include "mysqli_connect.inc";

    $iduser = $_GET["iduser"];
    $idpost = $_GET["idpost"];
    $idcomm = $_GET["idcomm"];

    if (!empty($idpost)){
        $sql = "INSERT INTO curtidas (id_usuario, id_post) ";
        $sql .= "VALUES ('$iduser', '$idpost');";
        mysqli_query($mysqli, $sql);
    }
    elseif (!empty($idcomm)){
        $sql = "INSERT INTO curtidas (id_usuario, id_comentario) ";
        $sql .= "VALUES ('$iduser', '$idcomm');";
        mysqli_query($mysqli, $sql);

        $sql = "SELECT * FROM comentarios WHERE id=" .$idcomm. ";";
        $res = mysqli_query($mysqli, $sql);
        $com = mysqli_fetch_array($res);
        $idpost = $com["id_post"];
    }

    header("Location: comentarios.php?idpost=$idpost");

    mysqli_close($mysqli);
?>