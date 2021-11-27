<?php
    include "auth.inc";
    include "mysqli_connect.inc";
    include "upload_img.php";

    $id = $_POST["id"];
    $texto = $_POST["texto"];
    $midia = $_FILES["img"];
    $caminho_img = $_POST["midia"];

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
        $sql = "UPDATE posts SET texto = '$texto', midia = '$caminho_img'";
        $sql .= "WHERE id = $id;";
        mysqli_query($mysqli, $sql);
        echo "Sua publicação foi atualizada!";

        echo "<br><br><a href='index.php'>Home</a>";

        //header("Location: index.php");
    }

    mysqli_close($mysqli);
?>