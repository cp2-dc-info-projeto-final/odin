<?php
    include "auth.inc";
    include "mysqli_connect.inc";

    $id_usuario = $_SESSION["id"];
    $texto = $_POST["texto"];
    $data_hora = date('Y-m-d H:i');
    $midia = "_img/marcoslindo.jpg";

    $erro = 0;

    if (strlen($texto) > 400){
        echo "Texto maior que 400 caracteres.";
        $erro = 1;
    }

    if ($erro == 0){
        $sql = "INSERT INTO posts (id_usuario, data_hora, texto, midia) ";
        $sql .= "VALUES ('$id_usuario', '$data_hora', '$texto', '$midia');";
        mysqli_query($mysqli, $sql);
        echo "Sua publicação foi postada!";
    }

    mysqli_close($mysqli);
?>