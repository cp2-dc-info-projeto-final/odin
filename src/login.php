<?php
    include "mysqli_connect.inc";

    $email = $_POST["email_login"];
    $senha = $_POST["senha_login"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($res) != 1){
        echo "E-mail inválido!";
        echo "<p><a href='login.html'>Página de Log In</a></p>";
    }else{
        $usuario = mysqli_fetch_array($res);
        if(!password_verify($senha, $usuario["senha"])){
            echo "Senha inválida!";
            echo "<p><a href='login.html'>Página de Log In</a></p>";
        }
        else{
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $usuario["senha"];
            $_SESSION["login"] = "OK";
            
            header("Location: index.php");
        }
    }
    mysqli_close($mysqli);
?>