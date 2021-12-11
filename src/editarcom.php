<!DOCTYPE HTML>

<?php 
    include "auth.inc";
    include "mysqli_connect.inc";

    $id = $_GET["id"];
    $sql = "SELECT * FROM comentarios WHERE id = $id;";
    $res = mysqli_query($mysqli,$sql);
    $com = mysqli_fetch_array($res);

    $sql = "SELECT * FROM posts WHERE id =" .$com["id_post"]. ";";
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
                          <form action="editc.php" method="POST">
                            <input type="hidden" name = "id" value = "<?php echo $com["id"]; ?>">
                            <textarea name="comentario" style="margin-top: -20px; margin-bottom: 10px; width: 900px; height: 100px;"><?php echo $com["texto"]; ?></textarea>
                            
                            <div class="actionBtnPost" style="position: relative; left: 82%;">
                              <button type="submit" class="filesPost like">Comentar</button>
                            </div>
                          </form>
                      </li>
                    </ul>
                </div>  
            </div>
        </section>
        </main>
    </body>
</html>
<?php mysqli_close($mysqli); ?>