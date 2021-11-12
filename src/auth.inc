<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }
    if(empty($email) OR empty($senha)){
        echo "O Log In ainda não foi feito.";
        header("Location: login.html");
        exit;
    }
    else{
        include "mysqli_connect.inc";
        $sql = "SELECT * FROM usuarios WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);

        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["email"]);
            unset($_SESSION["senha"]);
            echo "O Log In ainda não foi feito.";
            header("Location: login.html");
            mysqli_close($mysqli);
            exit;
        }
        else{
            $usuario = mysqli_fetch_array($res);
            if(!hash_equals($usuario["senha"], $senha)){
                unset($_SESSION["email"]);
                unset($_SESSION["senha"]);
                echo "O Log In ainda não foi feito.";
                header("Location: login.html");
                mysqli_close($mysqli);
                exit;
            }
        }
        mysqli_close($mysqli);
    }
?>