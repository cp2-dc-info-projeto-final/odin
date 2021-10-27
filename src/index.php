<!DOCTYPE HTML>
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
      
        <div class="content">      
      <div id="login">
        <form method="post" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
        
        <ul class="nav-list">
          <li><a href="index.php">Entrar</a></li>
          <li><a href="cadastro.php">Cadastrar-se</a></li>
          <li><a href="#">Equipe</a></li>
        </ul>
      </nav>
    </header>
    
    <main>
      <script src="_js/mobile-navbar.js"></script>


    </main>

  </body>
</html>