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
    }

    header("Location: index.php");

    mysqli_close($mysqli);
?>