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
              <a href="#" class="nav-link active">
                Perfil
              </a>
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

      <!---Formulario de Postagens-->
      <li style="height: 50px;"></li>
      <div class="newPost">
          <div class="infoUser">
                <div class="imgUser"></div>
                <strong><?php echo $usuario["nome"] . " " . $usuario["sobrenome"]; ?></strong>
            </div>    
                <form action="post.php" class="formPost" method="POST">
                    <textarea name="texto" placeholder="Mostre seus produtos !!!"></textarea>
                    
                    <div class="iconsAndButton">
                        <div class="icons">
                            <button class="btnFileForm"><img src="./assets/img.svg" alt="Adicionar uma imagem"></button>
                            <button class="btnFileForm"><img src="./assets/gif.svg" alt="Adicionar um gif"></button>
                            <button class="btnFileForm"><img src="./assets/video.svg" alt="Adicionar um video"></button>
                        </div>
                        <button type="submit" class="btnSubmitForm">Publicar</button>
                    </div>
                </form>
      </div>
      
      <ul class="posts">
        <?php
          $sql = "SELECT * FROM posts ORDER BY data_hora DESC;";
          $res = mysqli_query($mysqli,$sql);
          $linhas = mysqli_num_rows($res);
          for ($i = 0; $i < $linhas; $i++){
            $post = mysqli_fetch_array($res);
            $sqluser = "SELECT * FROM usuarios WHERE id = " .$post["id_usuario"]. ";";
            $resuser = mysqli_query($mysqli,$sqluser);
            $postuser = mysqli_fetch_array($resuser);
            echo '<li class="post">
              <div class="infoUserPost">
                <div class="imgUserPost"><!-- <img src="_img/viking.png">--> </div>
                  
                <div class="nameAndHour">
                  <strong>' .$postuser["nome"]. ' ' .$postuser["sobrenome"]. '</strong>
                  <p>' .$post["data_hora"]. '</p>
                </div>
              </div>

            <p>' .$post["texto"]. '</p>
            <img src="' .$post["midia"]. '">
            <div class="actionBtnPost">
              <button type="button" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
              <button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>';
              if ($_SESSION["id"] == $postuser["id"]){
                echo '<button type="button" class="filesPost share">Editar</button>';
              };
              if ($_SESSION["adm"] == 1 || $_SESSION["id"] == $postuser["id"]){
                 echo '<button type="button" class="filesPost like">Excluir</button>';
              };
            echo '</div></li>';
          }
        ?>
      </ul>
    </main>
  </body>
  <?php mysqli_close($mysqli); ?>
</html>