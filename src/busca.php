<!DOCTYPE HTML>

<?php 
    include "auth.inc";
    include "mysqli_connect.inc";
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odin - Edição de usuário</title>
        <link rel="stylesheet" href="_css/style.css" />
    </head>

    <body>
        <header rel="stylesheet" href="_css/style.css">
            <script src="_js/logout.js"></script>
            <nav>
                <a class="logo" href="index.php">Odin</a>

                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                        
                <ul class="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Perfil</a></li>
                    <li><a onclick="confirmarSaida()">Sair</a></li>
                </ul>
            </nav>
        </header>
    
        <main 
        rel="stylesheet" 
        href="_css/styleadm.css"  
        style=
        "margin: 250px 200px; 
        padding: 0; 
        font-family: Arial, Helvetica, sans-serif; 
        font-size: 16px;">
            <script src="_js/mobile-navbar.js"></script>
            <script src="_js/excluir.js"></script>

            <section class="flex">
                <?php
                    $busca = $_POST["busca"];

                    $sql = "SELECT * FROM usuarios WHERE nome like '%$busca%' OR sobrenome like '%$busca%';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);
                    if ($linhas == 0){
                        echo "Não há resultados para sua pesquisa.";
                    }
                    for($i=0; $i < $linhas; $i++){
                        $usuario = mysqli_fetch_array($res);
                        echo "<div class='card-container'>
                            <div class='top'>
                                <div class='image-container'>
                                    <img src='_img/viking.png' alt=''>
                                </div>
                            </div>

                            <div class='bottom'>
                                <p></p>
                                <h3>" .$usuario["nome"]. " " .$usuario["sobrenome"]. "</h3>
                                <p></p>
                                <h4>" .$usuario["email"]. "</h4>
                                <p></p>
                                <p>" .$usuario["telefone"]. "</p>
                                <a href='pag_perfil.php?id=".$usuario["id"]."' class='btn'> Checar Perfil</a>";
                        if ($_SESSION["adm"] == 1 || $_SESSION["id"] == $usuario["id"]){
                            echo "<p></p>
                                <a href='editar.php?id=".$usuario["id"]."' class='btn'> Alterar Informações</a>
                                <p></p>
                                <a onclick='confirmarExclusao(".$usuario["id"].")' class='btn'> Excluir Perfil</a>";
                        }
                        echo "</div>
                        </div>";
                    }
                    mysqli_close($mysqli);
                ?>
            </section>
        </main>
    </body>
</html>