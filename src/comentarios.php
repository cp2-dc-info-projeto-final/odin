<!DOCTYPE HTML>

<?php 
    include "auth.inc";
    include "mysqli_connect.inc";

    $idpost = $_GET["idpost"];
    $sql = "SELECT * FROM posts WHERE id = $idpost;";
    $res = mysqli_query($mysqli,$sql);
    $post = mysqli_fetch_array($res);

    $sql = "SELECT * FROM usuarios WHERE id =" .$post["id_usuario"]. ";";
    $res = mysqli_query($mysqli,$sql);
    $postuser = mysqli_fetch_array($res);

    $data_hora = new DateTime($post["data_hora"]);
    $data_hora = $data_hora->format("d/m/Y H:i");
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odin - Post</title>
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
    
        <main rel="stylesheet" href="_css/styleadm.css" style="margin: 250px 200px; padding: 0; font-family: Arial, Helvetica, sans-serif; font-size: 16px;">
            <script src="_js/mobile-navbar.js"></script>
            <script src="_js/excluir.js"></script>
            <script src="_js/excluirpost.js"></script>
            <script src="_js/linkeditar.js"></script>
            <script src="_js/curtircom.js"></script>
            <script src="_js/descurtircom.js"></script>
            <script src="_js/editarcom.js"></script>
            <script src="_js/excluircom.js"></script>

        <section class="flex"> 
            <div class="card-container">
                <div class="top">
                    
                </div>
                
                <div class="bottom">

       
      
      <ul style="list-style: none;">
        <li class="post">
          <div class="infoUserPost">
            <!--<div class="imgUserPost" style="width: 100%;"><img src="<?php //echo $postuser["fotoperfil"]; ?>" style="width: 100%; border-radius: 50%"></div>-->

            <div class="nameAndHour">
              <strong><?php echo $postuser["nome"]. " " .$postuser["sobrenome"]; ?></strong>
              <p><?php echo $data_hora; ?></p>
            </div>
          </div>

        <p>
          <?php echo $post["texto"]; ?>
        </p>

        <img style="width: 100%; margin-bottom: 10px; border-radius: 2.5%" src="<?php echo $post["midia"]; ?>">

        <div class="actionBtnPost">
          
        </div>

        </li>
      </ul>
                    <p></p>
                    <ul class="posts" style="list-style: none;">
                      <li class="post">
                            <div class="infoUserPost">
                              <div class="imgUserPost"><img src="_img/viking.png" style="width: 100%; border-radius: 50%"></div>
                                
                              <div class="nameAndHour" style="margin-bottom: 40px;">
                                <strong><?php echo $usuario["nome"]. " " .$usuario["sobrenome"]; ?></strong>
                              </div>
                            </div>
                          <form action="comentar.php" method="POST">
                            <input type="hidden" name = "idpost" value = "<?php echo $post["id"]; ?>">
                            <input type="hidden" name = "iduser" value = "<?php echo $usuario["id"]; ?>">
                            <textarea name="comentario" style="margin-top: -20px; margin-bottom: 10px; width: 900px; height: 100px;" placeholder="Comente aqui!"></textarea>
                            
                            <div class="actionBtnPost" style="position: relative; left: 82%;">
                              <button type="submit" class="filesPost like">Comentar</button>
                            </div>
                          </form>
                      </li>

                      <?php
                        $sql = "SELECT * FROM comentarios WHERE id_post = " .$post["id"]. " ORDER BY id DESC;";
                        $res = mysqli_query($mysqli,$sql);
                        $linhas = mysqli_num_rows($res);
                        for ($i = 0; $i < $linhas; $i++){
                          $com = mysqli_fetch_array($res);

                          $sqluser = "SELECT * FROM usuarios WHERE id = " .$com["id_usuario"]. ";";
                          $resuser = mysqli_query($mysqli,$sqluser);
                          $comuser = mysqli_fetch_array($resuser);

                          $data_hora = new DateTime($com["data_hora"]);
                          $data_hora = $data_hora->format("d/m/Y H:i");

                          $sqllike = "SELECT * FROM curtidas WHERE id_usuario = " .$_SESSION["id"]. " AND id_comentario = " .$com["id"]. ";";
                          $reslike = mysqli_query($mysqli, $sqllike);
                          $linhaslike = mysqli_num_rows(mysqli_query($mysqli, $sqllike));
                      ?>
                      
                        <li class="post">
                          <div class="infoUserPost">
                            <div class="imgUserPost"><img src="_img/viking.png" style="width: 100%; border-radius: 50%"></div>
                                
                            <div class="nameAndHour">
                              <strong><?php echo $comuser["nome"]. " " .$comuser["sobrenome"]; ?></strong>
                              <p><?php echo $data_hora; ?></p>
                            </div>
                          </div>

                          <p><?php echo $com["texto"]; ?></p>

                          <div class="actionBtnPost">
                            <?php
                              if ($linhaslike != 1){
                                echo '<button type="button" class="filesPost like" onclick="curtircom(' .$_SESSION["id"]. ', ' .$com["id"]. ')"><img src="./assets/heart.svg" alt="Curtir">Curtir</button>';
                              }
                              else{
                                echo '<button type="button" class="filesPost like" onclick="descurtircom(' .$_SESSION["id"]. ', ' .$com["id"]. ')"><img src="./assets/heart.svg" alt="Descurtir">Descurtir</button>';
                              }
                              
                              //echo '<button type="button" class="filesPost comment" onclick="comentar(' .$com["id"]. ')"><img src="./assets/comment.svg" alt="Comentar">Comentar</button>';
                              
                              if ($_SESSION["id"] == $comuser["id"]){
                                echo '<button type="button" class="filesPost share" onclick="editarCom(' .$com["id"]. ')">Editar</button>';
                              }
                              if ($_SESSION["adm"] == 1 || $_SESSION["id"] == $comuser["id"]){
                                echo '<button type="button" class="filesPost like" onclick="excluirCom(' .$com["id"]. ')">Excluir</button>';
                              }
                            ?>
                          </div>
                        </li>
                      <?php } ?>
                    </ul>
                </div>  
            </div>
        </section>
        </main>
    </body>
</html>
<?php mysqli_close($mysqli); ?>