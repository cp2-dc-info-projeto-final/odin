<!DOCTYPE HTML>
<html lang="pt-br">
    
<?php 
    include "auth.inc";
    include "mysqli_connect.inc";

    $id = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id = $id;";
    $res = mysqli_query($mysqli,$sql);
    $post = mysqli_fetch_array($res);
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Odin</title>
    <link rel="stylesheet" href="_css/stylenavbar.css" />
  </head>

  <body>
    <header>
      <script src="_js/logout.js"></script>

      <nav class="navbar fixed-top navbar-expand-sm 
      navbar-dark bg-dark">

        <a  
          href="#" 
          class="navbar-brand mb-0 h1">
            <img 
            class="d-inline-block align-top" src="./assets/icon8.svg.jpeg" 
            width="30" height="30"/>
          Odin
        </a>
        <button 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation" 
        class="navbar-toggler"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="pag_perfil.php" class="nav-link active">Perfil</a>
            </li>
            <?php
              if ($_SESSION["adm"] == 1){
                echo '<li class="nav-item active">
                  <a href="dashboard.php" class="nav-link">
                    Dashboard
                  </a>
                </li>';
              }
            ?>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link 
              dropdown-toggle" 
              id="navbarDropdown" 
              role="button" 
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >
                Opções
              </a>
              <ul class="dropdown-menu"
              aria-labelledby="navbarDropdown">
                <li><a href="editar.php" class="dropdown-item">Editar Usuario</a></li>
                <li><a href="#" class="dropdown-item">Ajuda e Suporte</a></li>
                <li><a onclick="confirmarSaida()" class="dropdown-item">Sair</a></li>
              </ul>
            </li>
          </ul>          
        </div>
        <form class="d-flex" action="busca.php" method="POST">
          <input type="text" class="form-control me-2" name="busca">
          <button type="submit" class="btn btn-primary custom-btn" style="color: white;">Procurar</button>
        </form>
      </nav>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </header>

    <main class="main">
      <script src="_js/mobile-navbar.js"></script>
      <script src="_js/excluirpost.js"></script>
      <script src="_js/linkeditar.js"></script>

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
                            <textarea name="texto">' .$post["texto"]. '</textarea>
                                    
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
                                    <input class="btnFileForm" type="file" id="arquivo" name="img"  style="display:none"></input>
                                                        
                                </div>
                                <button type="submit" class="btnSubmitForm">Publicar</button>
                            </div>
                        </form>
                        <img style="width: 100%; margin-top: 25px; border-radius: 2.5%" src="' .$post["midia"]. '">
                    </div>';
                }
                else echo "Você não tem permissão para editar essa postagem.";
            ?>
        </main>
    </body>
</html>
