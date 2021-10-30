<?php
    include "mysqli_connect.inc";
    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);
    $usuario = mysqli_fetch_array($res);
    mysqli_close($mysqli);
?>