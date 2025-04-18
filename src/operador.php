<?php
    include "auth.inc";
    include "mysqli_connect.inc";
    include "calcularIdade.inc";

    $operacao = $_POST["operacao"];

    if ($operacao == "editar"){

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $datanasc = $_POST["datanasc"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $adm = (isset($_POST["adm"])) ? 1 : 0;

        $sql = "SELECT * FROM usuarios WHERE id = '$id';";
        $res = mysqli_query($mysqli, $sql);
        $usuario = mysqli_fetch_array($res);

        $erro = 0;

        if (empty($nome) || empty($sobrenome) || empty($datanasc) || empty($email) || empty($telefone)){
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
        $usuarioconfirm = mysqli_fetch_array($res);

        if ((mysqli_num_rows($res) >= 1) && ($id != $usuarioconfirm["id"])){
            echo "Esse e-mail já pertence a outra conta. <br>";
            $erro = 1;
        }

        if ($erro == 0){
            $sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', datanasc = '$datanasc', email = '$email', telefone = '$telefone', adm = '$adm' ";
            $sql .= "WHERE id = $id;";
            mysqli_query($mysqli,$sql);
            echo "Atualização bem-sucedida. <br>";
            header("Location: index.php");
        }else{
            echo "<br><a href='editar.php'>Tentar editar o usuário novamente</a>";
        }
    }
    elseif ($operacao == "alterarsenha"){
        $id = $_POST["id"];
        $senhaatual = $_POST["senhaatual"];
        $senha = $_POST["senha"];
        $csenha = $_POST["csenha"];

        if (empty($senhaatual) || empty($senha) || empty($csenha)){
            echo "Preencha todos os campos. <br>";
            $erro = 1;
        }

        $sql = "SELECT * FROM usuarios WHERE id = '$id';";
        $res = mysqli_query($mysqli, $sql);
        $usuario = mysqli_fetch_array($res);

        if(!password_verify($senhaatual, $usuario["senha"])){
            echo "A senha atual está errada.<br>";
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
            $sql = "UPDATE usuarios SET senha = '$senha_cripto' ";
            $sql .= "WHERE id = $id;";
            mysqli_query($mysqli,$sql);
            echo "Atualização bem-sucedida. <br>";
            header("Location: index.php");
        }
    }

    mysqli_close($mysqli);
?>