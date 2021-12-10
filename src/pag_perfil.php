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
            <script src="_js/excluirpost.js"></script>
            <script src="_js/linkeditar.js"></script>
            <script src="_js/curtir.js"></script>
            <script src="_js/descurtir.js"></script>

        <section class="flex"> 
            <div class="card-container">
                <div class="top">
                    <div class="image-container">
                      <img src="<?php echo $usuario["fotoperfil"]; ?>" style="width: 100%; border-radius: 50%">
                    </div>
                </div>
                
                <div class="bottom">
                    <p></p>
                    <p></p>
                    <h3> <?php echo $usuario["nome"]. " " .$usuario["sobrenome"]; ?> </h3>
                    <p></p>
                    <h4> <?php echo $usuario["email"]; ?> </h4>
                    <p></p>
                    <p> <?php echo $usuario["telefone"]; ?> </p>
                    <?php
                      echo "<a onclick='confirmarExclusao(".$usuario["id"].")' class='btn'> Excluir Perfil</a>";
                      echo "<p></p>";
                      echo "<a href='editar.php?id=".$usuario["id"]."' class='btn'> Alterar Informações</a>";
                      if ($_SESSION["id"] == $usuario["id"]){
                          echo "<p></p> <a href='altsenha.php?id=".$usuario["id"]."' class='btn'>Alterar Senha</a>";
                      }
                    ?>
                
                
                    <p></p>
                    <ul class="posts" style="list-style: none;">
                      <?php
                        $sql = "SELECT * FROM posts WHERE id_usuario=" .$usuario["id"]. " ORDER BY id DESC;";
                        $res = mysqli_query($mysqli,$sql);
                        $linhas = mysqli_num_rows($res);
                        for ($i = 0; $i < $linhas; $i++){
                          $post = mysqli_fetch_array($res);
                          $data_hora = new DateTime($post["data_hora"]);
                          $data_hora = $data_hora->format("d/m/Y H:i");
                          echo '<li class="post">
                            <div class="infoUserPost">
                              <div class="imgUserPost"><img src="' .$usuario["fotoperfil"]. '" style="width: 100%; border-radius: 50%"></div>
                                
                              <div class="nameAndHour">
                                <strong>' .$usuario["nome"]. ' ' .$usuario["sobrenome"]. '</strong>
                                <p>' .$data_hora. '</p>
                              </div>
                            </div>

                          <p>' .$post["texto"]. '</p>
                          <img style="width: 100%; margin-bottom: 10px; border-radius: 2.5%" src="' .$post["midia"]. '">
                          <div class="actionBtnPost">';

                          $sqllike = "SELECT * FROM curtidas WHERE id_usuario = " .$_SESSION["id"]. " AND id_post = " .$post["id"]. ";";
                          $reslike = mysqli_query($mysqli, $sqllike);
                          $linhaslike = mysqli_num_rows(mysqli_query($mysqli, $sqllike));
              
                          if ($linhaslike != 1){
                            echo '<button type="button" class="filesPost like" onclick="curtir(' .$_SESSION["id"]. ', ' .$post["id"]. ')"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>';
                          }
                          else{
                            echo '<button type="button" class="filesPost like" onclick="descurtir(' .$_SESSION["id"]. ', ' .$post["id"]. ')"><img src="./assets/heart.svg" alt="Descurtir">Descurtir</button>';
                          }
                          echo '<button type="button" class="filesPost comment"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>';
                            if ($_SESSION["id"] == $usuario["id"]){
                              echo '<button type="button" class="filesPost share" onclick="editarPost(' .$post["id"]. ')">Editar</button>';
                            }
                            if ($_SESSION["adm"] == 1 || $_SESSION["id"] == $usuario["id"]){
                              echo '<button type="button" class="filesPost like" onclick="excluirPost('.$post["id"].')">Excluir</button>';
                            }
                          echo '</div></li>';
                        }
                      ?>
                  </ul>
                </div>  
            </div>
        </section>
        </main>
    </body>
</html>
<?php mysqli_close($mysqli); ?>