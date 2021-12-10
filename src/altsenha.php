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
    
        <main>
            <script src="_js/mobile-navbar.js"></script>

            <div id="divcad">
                <form id="formcad" action = "operador.php" method = "POST">
                    <input type="hidden" name="operacao" value="alterarsenha">
                    <input type="hidden" name="id" value="<?php echo $usuario["id"]?>">
                    <p>Senha atual: <input type="password" name="senhaatual" maxlength="20" minlength="8" required="required"></p>
                    <p>Nova senha: <input type="password" name="senha" maxlength="20" minlength="8" required="required"></p>
                    <p>Confirme sua nova senha: <input type="password" name="csenha" maxlength="20" minlength="8" required="required"></p>
                    <input type="submit" value="Atualizar senha">
                </form>
            </div>
        </main>

    </body>
</html>