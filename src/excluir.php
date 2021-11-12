<?php
    $id = $_GET["id"];

    include "mysqli_connect.inc";

    $sql = "DELETE FROM usuarios WHERE id = '$id';";
    $res = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($res) != 0){
        echo "Erro ao apagar!";
        echo "<a href = 'dashboard.php'>Retornar ao dashboard</a>";
    }else{
        echo "Excluído com sucesso!";
        header("Location: dashboard.php");
    }
?>