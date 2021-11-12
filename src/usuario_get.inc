<?php
    include "mysqli_connect.inc";

    if (!empty($_GET)){
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuarios WHERE id = $id;";
        $res = mysqli_query($mysqli,$sql);
        $usuario = mysqli_fetch_array($res);
    }

    mysqli_close($mysqli);
?>