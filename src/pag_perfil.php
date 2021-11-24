<!DOCTYPE HTML>

<?php 
    include "auth.inc";
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odin - Meu Perfil</title>
        <link rel="stylesheet" href="_css/styleperfil.css" />
    </head>

    <body>
        <header rel="stylesheet" href="_css/style.css">
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
                    <li><a href="logout.php">Sair</a></li>
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

        <section class="flex"> 
            <div class="card-container">
                <div class="top">
                    <div class="image-container">
                        <img src="./_img/marcoslindo.jpg" alt="">

                    </div>
                </div>
                
                <div class="bottom">
                    <p></p>
                    <p></p>
                    <h3> Marcos Gabriel</h3>
                    <p></p>
                    <h4> Genio da nano tecnologia</h4>
                    <p></p>
                    <p> BRABO SIMPLESMENTE EM TUDO</p>
                    <a href="#" class="btn">Alterar Bio</a>
                    <p></p>
                    <a href="#" class="btn"> Excluir Perfil</a>
                    <p></p>
                    <a href="#" class="btn"> Alterar Informações</a>
                
                        <p></p>
                        <ul class="posts">
                        <li class="post">
                          <div class="infoUserPost">
                            <div class="imgUserPost"></div>
                              
                            <div class="nameAndHour">
                              <strong>Marcos Gabriel</strong>
                              <p>14h</p>
                            </div>
                          </div>
                        <p>
                          Queria compartilhar o quão barato está o PS6 e a placa de vídeo 4090, estão por somente 10 reais aqui na Lucas'bazar 
                          sim e essa é a ultima chance de você conseguir esses produtos por esses preços e na compra dos dois você ganha 
                          um xbox series Z venha logo a Rua outubro melhor mês N 666
                        </p>
                        <div class="actionBtnPost">
                          <button type="submit" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
                          <button type="submit" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>
                          <button type="submit" class="filesPost share">Editar</button>
                          <button type="submit" class="filesPost like">Excluir</button>
                
                        </div>
                
                        </li>
                        </ul>
                        <p></p>
                        <ul class="posts">
                        <li class="post">
                          <div class="infoUserPost">
                            <div class="imgUserPost"></div>
                              
                            <div class="nameAndHour">
                              <strong>Marcos Gabriel</strong>
                              <p>14h</p>
                            </div>
                          </div>
                        <p>
                          Queria compartilhar o quão barato está o PS6 e a placa de vídeo 4090, estão por somente 10 reais aqui na Lucas'bazar 
                          sim e essa é a ultima chance de você conseguir esses produtos por esses preços e na compra dos dois você ganha 
                          um xbox series Z venha logo a Rua outubro melhor mês N 666
                        </p>
                        <div class="actionBtnPost">
                          <button type="submit" class="filesPost like"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>
                          <button type="submit" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>
                          <button type="submit" class="filesPost share">Editar</button>
                          <button type="submit" class="filesPost like">Excluir</button>
                
                        </div>
                
                        </li>
                        </ul>
                </div>  
            </div>
        </section>
        </main>
    </body>
</html>
