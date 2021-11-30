<!DOCTYPE HTML>

<?php 
    include "auth.inc";
    include "mysqli_connect.inc";

    $id = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id = $id;";
    $res = mysqli_query($mysqli,$sql);
    $post = mysqli_fetch_array($res);
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Odin - Edição de post</title>
        <link rel="stylesheet" href="_css/style.css" />
    </head>

    <body>
        <header>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </header>
    
        <main>
            <script src="_js/mobile-navbar.js"></script>

            <?php 
                if ($_SESSION["id"] == $post["id_usuario"]){
                    echo '<li style="height: 50px;"></li>
                    <div class="newPost">
                        <div class="infoUser">
                            <div class="imgUser"><img src="' .$usuario['fotoperfil']. '" style="width: 100%; border-radius: 50%"></div>
                            <strong>' .$usuario["nome"]. ' ' .$usuario["sobrenome"]. '</strong>
                        </div>    
                            
                        <form action="editpost.php" class="formPost" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name = "id" value = "' .$post["id"]. '">
                            <input type="hidden" name = "midia" value = "' .$post["midia"]. '">
                            <input type="hidden" name="oldtext" value="' .$post["texto"]. '">
                            <textarea name="texto" value="' .$post["texto"]. '"></textarea>

                            <!--<img style="width: 50%; margin-bottom: 10px; border-radius: 2.5%" src="' .$post["midia"]. '">-->
                                    
                            <div class="iconsAndButton">
                                <div class="icons">
                                    <label 
                                        for="arquivo" 
                                        class="input"
                                        style="
                                        background: #483d8b;
                                        padding: 10px 50px;
                                        color:  #fff;
                                        font-weight: bold;
                                        outline: none;
                                        cursor: pointer;
                                        border: 15px;
                                        border-radius: 10px;
                                        transition: 0.2s;"> Anexar</label>  
                                    <input class="btnFileForm" type="file" id="arquivo" name="img"  style=" display:none"></input>
                                                        
                                </div>
                                <button type="submit" class="btnSubmitForm">Publicar</button>
                            </div>
                        </form>
                    </div>';
                }
                else echo "Você não tem permissão para editar essa postagem.";
            ?>
        </main>
    </body>
</html>
