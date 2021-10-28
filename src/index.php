<!DOCTYPE HTML>

<?php 
  include "auth.inc";
  include "mysqli_connect.inc";
  $sql = "SELECT * FROM usuarios WHERE email = '$email';";
  $res = mysqli_query($mysqli, $sql);
  $usuario = mysqli_fetch_array($res);
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
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Amigos</a></li>
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

      
    </main>

  </body>
</html>

<?php mysqli_close($mysqli); ?>