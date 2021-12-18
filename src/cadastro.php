<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Odin - Cadastro</title>
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
                    <li><a href="login.html">Entrar</a></li>
                    <li><a href="cadastro.php">Cadastrar-se</a></li>
                    <li><a href="#">Equipe</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
            <script src="_js/mobile-navbar.js"></script>


            <div id="divcad" style="margin-left: 0px; margin-top: 10px;">
                <form id="formcad" action = "cad.php" method = "POST">
                   
                    <h3>Nome: <input type="text" name="nome" size="30" maxlength="30" required="required"></h3><br>
                    <h3>Sobrenome: <input type="text" name="sobrenome" size="30" maxlength="30" required="required"></h3><br>
                    <h3>Data de nascimento: <input type="date" name="datanasc" required="required" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>"></h3><br>
                    <h3>E-mail: <input type="email" name="email" size="30" maxlength="30" placeholder="exemplo@email.com" required="required"></h3><br>
                    <h3>Senha: <input type="password" name="senha" maxlength="20" minlength="8" placeholder="Digite uma senha de 8-20 caracteres" required="required"></h3><br>
                    <h3>Confirme sua senha: <input type="password" name="csenha" maxlength="20" minlength="8" required="required"></h3><br>
                    <h3>Telefone (celular): <input type="tel" name="telefone" pattern="[0-9]{2}[9]{1}[0-9]{8}$" required="required" placeholder="21912345678"></h3><br>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
        </main>

    </body>
</html>
