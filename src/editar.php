<!DOCTYPE HTML>

<?php 
    include "auth.inc";
    include "usuario_get.inc";
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odin - Edição de usuário</title>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
            <script src="_js/mobile-navbar.js"></script>

            <div id="divcad">
                <form id="formcad" action = "operador.php" method = "POST">
                    <input type="hidden" name="operacao" value="editar">
                    <input type="hidden" name="id" value="<?php echo $usuario["id"]?>">
                    <p>Nome: <input type="text" name="nome" size="30" maxlength="30" required="required" value="<?php echo $usuario["nome"]?>"></p>
                    <p>Sobrenome: <input type="text" name="sobrenome" size="30" maxlength="30" required="required" value="<?php echo $usuario["sobrenome"]?>"></p>
                    <p>Data de nascimento: <input type="date" name="datanasc" required="required" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>" value="<?php echo $usuario["datanasc"]?>"></p>
                    <p>E-mail: <input type="email" name="email" size="30" maxlength="30" required="required" value="<?php echo $usuario["email"]?>"></p>
                    <p>Senha atual: <input type="password" name="senhaatual" maxlength="20" minlength="8" required="required"></p>
                    <p>Nova senha: <input type="password" name="senha" maxlength="20" minlength="8" required="required"></p>
                    <p>Confirme sua nova senha: <input type="password" name="csenha" maxlength="20" minlength="8" required="required"></p>
                    <p>Telefone (celular): <input type="tel" name="telefone" pattern="[0-9]{2}[9]{1}[0-9]{8}$" required="required" value="<?php echo $usuario["telefone"]?>"></p>
                    <?php
                        if ($_SESSION["adm"] == 1){
                            if ($usuario["adm"] == 1){
                                echo "<p><input type = 'checkbox' name='adm' checked='checked'>Promover/Rebaixar administrador</p>";
                            }else{
                                echo "<p><input type = 'checkbox' name='adm'>Promover/Rebaixar administrador</p>";
                            }
                        }
                    ?>
                    <input type="submit" value="Atualizar">
                </form>
            </div>
        </main>

    </body>
</html>