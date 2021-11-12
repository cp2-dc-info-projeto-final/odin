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

            <div id="divcad">
                <form id="formcad" action = "cad.php" method = "POST">
                    <p>Nome: <input type="text" name="nome" size="30" maxlength="30" required="required"></p>
                    <p>Sobrenome: <input type="text" name="sobrenome" size="30" maxlength="30" required="required"></p>
                    <p>Data de nascimento: <input type="date" name="datanasc" required="required" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>"></p>
                    <p>E-mail: <input type="email" name="email" size="30" maxlength="30" required="required"></p>
                    <p>Senha: <input type="password" name="senha" maxlength="20" minlength="8" required="required"></p>
                    <p>Confirme sua senha: <input type="password" name="csenha" maxlength="20" minlength="8" required="required"></p>
                    <p>Telefone (celular): <input type="tel" name="telefone" pattern="[0-9]{2}[9]{1}[0-9]{8}$" required="required"></p>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
        </main>

    </body>
</html>