<!DOCTYPE HTML>
<html lang="pt-br">
  <?php 
    include "auth.inc";
    include "mysqli_connect.inc";
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

      <!---Formulario de Postagens-->
      <li style="height: 50px;"></li>
      <div class="newPost">
          <div class="infoUser">
                <div class="imgUser"><img src="<?php echo $usuario["fotoperfil"]; ?>" style="width: 100%; border-radius: 50%"></div>
                <strong><?php echo $usuario["nome"] . " " . $usuario["sobrenome"]; ?></strong>
            </div>    
                <form action="post.php" class="formPost" method="POST" enctype="multipart/form-data">
                    <textarea name="texto" placeholder="Mostre seus produtos !!!"></textarea>
                    
                    <div class="iconsAndButton">
                        <div class="icons">
                            <input class="btnFileForm" type="file" name="img"><img src="./assets/img.svg" alt="Adicionar uma imagem"></input>
                            <button class="btnFileForm"><img src="./assets/gif.svg" alt="Adicionar um gif"></button>
                            <button class="btnFileForm"><img src="./assets/video.svg" alt="Adicionar um video"></button>
                        </div>
                        <button type="submit" class="btnSubmitForm">Publicar</button>
                    </div>
                </form>
      </div>
      
      <ul class="posts">
        <?php
          $sql = "SELECT * FROM posts ORDER BY id DESC;";
          $res = mysqli_query($mysqli,$sql);
          $linhas = mysqli_num_rows($res);
          for ($i = 0; $i < $linhas; $i++){
            $post = mysqli_fetch_array($res);
            $sqluser = "SELECT * FROM usuarios WHERE id = " .$post["id_usuario"]. ";";
            $resuser = mysqli_query($mysqli,$sqluser);
            $postuser = mysqli_fetch_array($resuser);
            $data_hora = new DateTime($post["data_hora"]);
            $data_hora = $data_hora->format("d/m/Y H:i");
            echo '<li class="post">
              <div class="infoUserPost">
                <div class="imgUserPost"><img src="' .$postuser["fotoperfil"]. '" style="width: 100%; border-radius: 50%"></div>
                  
                <div class="nameAndHour">
                  <strong>' .$postuser["nome"]. ' ' .$postuser["sobrenome"]. '</strong>
                  <p>' .$data_hora. '</p>
                </div>
              </div>

            <p>' .$post["texto"]. '</p>
            <img style="width: 100%; margin-bottom: 10px; border-radius: 2.5%" src="' .$post["midia"]. '">
            <div class="actionBtnPost">
              <button type="button" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
              <button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>';
              if ($_SESSION["id"] == $postuser["id"]){ ?>
                <button type="button" class="filesPost share" onclick="location.href='editarpost.php?id=<?php echo $post["id"]; ?>'">Editar</button>
              <?php
              }
              if ($_SESSION["adm"] == 1 || $_SESSION["id"] == $postuser["id"]){
                echo '<button class="filesPost like" onclick="excluirPost('.$post["id"].', ' .$post["midia"]. ')">Excluir</button>';
              }
            echo '</div></li>';
          }
        ?>
      </ul>
    </main>
  </body>
  <?php mysqli_close($mysqli); ?>
</html>