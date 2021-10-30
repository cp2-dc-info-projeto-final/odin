<!DOCTYPE HTML>

<?php 
  include "auth.inc";
  include "usuario_info.inc";
?>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odin</title>
    <link rel="stylesheet" href="_css/style.css" />
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="index.php">Odin</a>

        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        
        <ul class="nav-list">
          <li><a href="perfil.php">Perfil</a></li>
          <li><a href="#">Amigos</a></li>
          <li><a href="editar.php">Editar</a></li>
          <li><a href="logout.php">Sair</a></li>
        </ul>
      </nav>
    </header>
    
    <main>
      <script src="_js/mobile-navbar.js"></script>
      
       <div class="newPost">
          <div class="infoUser">
                <div class="imgUser"></div>
                <?php echo "<strong>" . $usuario["nome"] . " " . $usuario["sobrenome"] . "</strong>"; ?>
            </div>    

                <form action="" class="formPost">
                    <textarea name="textarea" placeholder="Mostre seus produtos !!!"></textarea>
                    
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
        <li class="post">
          <div class="infoUserPost">
            <div class="imgUserPost"></div>
              
            <div class="nameAndHour">
              <strong>Erick Silva</strong>
              <p>14h</p>
            </div>
          </div>

        <p>
          Queria compartilhar o quão barato está o PS6 e a placa de vídeo 4090, estão por somente 10 reais aqui na Lucas'bazar 
          sim e essa é a ultima chance de você conseguir esses produtos por esses preços e na compra dos dois você ganha 
          um xbox series Z venha logo a Rua outubro melhor mês N 666
        </p>

        <div class="actionBtnPost">
          <button type="button" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
          <button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>
          <button type="button" class="filesPost share"><img src="./assets/share.svg" alt="Compartilhar">Compartilhar</button>
        </div>

        </li>
        
        <li class="post">
          <div class="infoUserPost">
            <div class="imgUserPost"></div>
              
            <div class="nameAndHour">
              <strong>Erick Silva</strong>
              <p>14h</p>
            </div>
          </div>

        <p>
          Queria compartilhar o quão barato está o PS6 e a placa de vídeo 4090, estão por somente 10 reais aqui na Lucas'bazar 
          sim e essa é a ultima chance de você conseguir esses produtos por esses preços e na compra dos dois você ganha 
          um xbox series Z venha logo a Rua outubro melhor mês N 666
        </p>

        <div class="actionBtnPost">
          <button type="button" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
          <button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>
          <button type="button" class="filesPost share"><img src="./assets/share.svg" alt="Compartilhar">Compartilhar</button>
        </div>

        </li>

        <li class="post">
          <div class="infoUserPost">
            <div class="imgUserPost"></div>
              
            <div class="nameAndHour">
              <strong>Erick Silva</strong>
              <p>14h</p>
            </div>
          </div>

        <p>
          Queria compartilhar o quão barato está o PS6 e a placa de vídeo 4090, estão por somente 10 reais aqui na Lucas'bazar 
          sim e essa é a ultima chance de você conseguir esses produtos por esses preços e na compra dos dois você ganha 
          um xbox series Z venha logo a Rua outubro melhor mês N 666
        </p>

        <div class="actionBtnPost">
          <button type="button" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
          <button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>
          <button type="button" class="filesPost share"><img src="./assets/share.svg" alt="Compartilhar">Compartilhar</button>
        </div>

        </li>
      </ul>     
    </main>

  </body>
</html>