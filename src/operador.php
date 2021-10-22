<?php
    $operacao = $_POST["operacao"];

    if ($operacao == "cadastro"){
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
        
        $data = explode('-', $datanasc);
        $anoatual = date("Y");
        $anonasc = (int)$data[0];

        if ($anonasc > $anoatual){
            echo "Ano inválido. <br>";
            $erro = 1;
        }
        if ($anoatual - $anonasc < 18){
            echo "Não é permitido o acesso de menores de 18 anos a essa rede social. <br>";
            $erro = 1;
        }

        if (strlen($email) < 10){
            echo "Digite seu e-mail corretamente. <br>";
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
            /*$mysqli = mysqli_connect("localhost","estudante","123","ds30x");
            $sql = "INSERT INTO usuarios (username,senha,nome,idade,email)";
            $sql .= "VALUES ('$username','$senha','$nome',$idade,'$email')";
            mysqli_query($mysqli,$sql);
            mysqli_close($mysqli); */
            echo "Cadastro bem-sucedido. <br>";
        }
    }










?>