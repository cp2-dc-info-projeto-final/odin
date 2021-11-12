<?php
    include "mysqli_connect.inc";
    include "calcularIdade.inc";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $datanasc = $_POST["datanasc"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $csenha = $_POST["csenha"];
    $telefone = $_POST["telefone"];

    $erro = 0;

    if (empty($nome) || empty($sobrenome) || empty($datanasc) || empty($email) || empty($senha) || empty($csenha) || empty($telefone)){
        echo "Preencha todos os campos. <br>";
        $erro = 1;
    }

    if(strlen($nome) > 30){
        echo "O nome deve possuir no máximo 30 caracteres.<br>";
        $erro = 1;
    }

    if(strlen($sobrenome) > 30){
        echo "O nome deve possuir no máximo 30 caracteres.<br>";
        $erro = 1;
    }
    
    $data = explode('-', $datanasc);
    $anoatual = date("Y");
    $anonasc = (int)$data[0];

    if ($anonasc > $anoatual){
        echo "Ano inválido. <br>";
        $erro = 1;
    }

    $idade = calcularIdade($datanasc);

    if ($idade < 18){
        echo "Não é permitido o acesso de menores de 18 anos a essa rede social. <br>";
        $erro = 1;
    }

    if (strlen($email) < 10 || filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE){
        echo "Digite seu e-mail corretamente. <br>";
        $erro = 1;
    }

    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($res) >= 1){
        echo "Esse e-mail já pertence a outra conta. <br>";
        $erro = 1;
    }

    if ($senha != $csenha){
        echo "As senha não coincidem. Digite a mesma senha nos dois campos. <br>";
        $erro = 1;
    }

    if (strlen($senha) < 8 || strlen($senha) > 20){
        echo "Sua senha precisa ter entre 8 e 20 caracteres. <br>";
        $erro = 1;
    }

    if ($erro == 0){
        $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, sobrenome, datanasc, email, senha, telefone)";
        $sql .= "VALUES ('$nome', '$sobrenome', '$datanasc', '$email', '$senha_cripto', '$telefone');";
        mysqli_query($mysqli, $sql);
        echo "Cadastro bem-sucedido. <br>";
        
        header("Location: login.html");
    }

    mysqli_close($mysqli);
?>