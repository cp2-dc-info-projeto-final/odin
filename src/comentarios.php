<!DOCTYPE HTML>

<?php 
    include "auth.inc";
    include "usuario_get.inc";
    include "mysqli_connect.inc";
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odin - Perfil</title>
        <link rel="stylesheet" href="_css/styleperfil.css" />
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
                    <li><a href="pag_perfil.php">Perfil</a></li>
                    <li><a onclick="confirmarSaida()">Sair</a></li>
                </ul>
            </nav>
        </header>
    
        <main rel="stylesheet" href="_css/styleadm.css" style="margin: 250px 200px; 
        padding: 0; 
        font-family: Arial, Helvetica, sans-serif; 
        font-size: 16px;">
            <script src="_js/mobile-navbar.js"></script>
            <script src="_js/excluir.js"></script>
            <script src="_js/excluirpost.js"></script>
            <script src="_js/linkeditar.js"></script>
            <script src="_js/curtir.js"></script>
            <script src="_js/descurtir.js"></script>

        <section class="flex"> 
            <div class="card-container">
                <div class="top">
                    
                </div>
                
                <div class="bottom">

       
      
      <ul>
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
          
        </div>

        </li>
      </ul>
                    <p></p>
                    <ul class="posts" style="list-style: none;">
                      <li class="post">
                            <div class="infoUserPost">
                              <div class="imgUserPost"><img src="_img/viking.png" style="width: 100%; border-radius: 50%"></div>
                                
                              <div class="nameAndHour">
                                <strong>Erick Lima</strong>
                                <p>10/12/2021 17:45</p>
                              </div>
                            </div>

                          <textarea style="margin: 0px; width: 902px; height: 203px;">comentario foda</textarea>
                          <img style="width: 100%; margin-bottom: 10px; border-radius: 2.5%" src="">
                          <div class="actionBtnPost"><button type="button" class="filesPost like" onclick="curtir(3, 25)">Comentar</button><button type="button" class="filesPost share" onclick="editarPost(25)">Editar</button><button type="button" class="filesPost like" onclick="excluirPost(25)">Excluir</button></div></li><li class="post">
                            <div class="infoUserPost">
                              <div class="imgUserPost"><img src="_img/viking.png" style="width: 100%; border-radius: 50%"></div>
                                
                              <div class="nameAndHour">
                                <strong>Erick Lima</strong>
                                <p>10/12/2021 17:10</p>
                              </div>
                            </div>

                          <p>teste do teste</p>
                          <img style="width: 100%; margin-bottom: 10px; border-radius: 2.5%" src="">
                          <div class="actionBtnPost"><button type="button" class="filesPost like" onclick="curtir(3, 24)"><img src="./assets/heart.svg" alt="Curtir">Curtir</button><button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button><button type="button" class="filesPost share" onclick="editarPost(24)">Editar</button><button type="button" class="filesPost like" onclick="excluirPost(24)">Excluir</button></div></li><li class="post">
                            <div class="infoUserPost">
                              <div class="imgUserPost"><img src="_img/viking.png" style="width: 100%; border-radius: 50%"></div>
                                
                              <div class="nameAndHour">
                                <strong>Erick Lima</strong>
                                <p>10/12/2021 17:10</p>
                              </div>
                            </div>

                          <p>lab lab</p>
                          <img style="width: 100%; margin-bottom: 10px; border-radius: 2.5%" src="">
                          <div class="actionBtnPost"><button type="button" class="filesPost like" onclick="curtir(3, 23)"><img src="./assets/heart.svg" alt="Curtir">Curtir</button><button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button><button type="button" class="filesPost share" onclick="editarPost(23)">Editar</button><button type="button" class="filesPost like" onclick="excluirPost(23)">Excluir</button></div></li>                  </ul>
                </div>  
            </div>
        </section>
        </main>
    </body>
</html>
<?php mysqli_close($mysqli); ?>