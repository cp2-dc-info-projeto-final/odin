<?php
    include "auth.inc";
    include "mysqli_connect.inc";
    include "upload_img.php";

    $fuso = new DateTimeZone('Etc/GMT+3');
    $data_hora = new DateTime("now", $fuso);
    $data_hora = $data_hora->format("Y-m-d H:i");

    $id_usuario = $_SESSION["id"];
    $texto = $_POST["texto"];
    $midia = $_FILES["img"];

    $erro = 0;

    if (strlen($texto) > 400){
        echo "Texto maior que 400 caracteres.";
        $erro = 1;
    }

    if ($midia["size"] != 0){
        $caminho_img = upload_imagem($midia);
        if($caminho_img === false){
            echo "Não foi possível carregar a imagem corretamente.<br>";
            $erro = 1;
        }
    }

    if (empty($texto) && empty($caminho_img)){
        echo "Postagem vazia!";
        $erro = 1;
    }

    if ($erro == 0){
        $sql = "INSERT INTO posts (id_usuario, data_hora, texto, midia) ";
        $sql .= "VALUES ('$id_usuario', '$data_hora', '$texto', '$caminho_img');";
        mysqli_query($mysqli, $sql);
        echo "Sua publicação foi postada!";

        header("Location: index.php");
    }

    mysqli_close($mysqli);
?>