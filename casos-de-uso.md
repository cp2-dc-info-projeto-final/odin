# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Login
 - [CDU 02](#CDU-02): Logout
 - [CDU 03](#CDU-03): Duis nec orci quis velit faucibus hendrerit tempus vel libero.


## Lista dos Atores

 - Usuário 

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01

Sistema de login

**Fluxo Principal**

1- O sistema apresenta um formulário e campos E-mail e senha. 
2- O usuário insere seu E-mail e senha e clica no botão “Entrar”. 
3- O sistema valida o E-mail e a senha do usuário. 
4- O sistema encaminha o usuário para sua tela inicial.

**Fluxo Alternativo A**

1- O sistema apresenta um formulário e campos E-mail e senha. 
2- O usuário insere seu E-mail e senha e clica no botão “Entrar”. 
3- O sistema informa que o E-mail está inválido. 
4- O usuário corrige as informações de E-mail e senha clica no botão “Entrar”.  
5- O sistema encaminha o usuário para sua tela inicial. 

**Fluxo Alternativo B**

1- O sistema apresenta um formulário e campos E-mail e senha. 
2- O usuário insere seu E-mail e Senha e clica no botão “Entrar”. 
3- O sistema informa que o Senha está inválido. 
4- O usuário corrige as informações de E-mail e senha clica no botão “Entrar”.  
5- O sistema encaminha o usuário para sua tela inicial.

**Fluxo Alternativo C**

1- O sistema apresenta um formulário e campos E-mail e senha. 
2- O usuário clica no botão “Entrar”. 
3- O sistema apresenta um popup pedindo para preencher os campos de E-mail e senha. 
4- O usuário insere seu E-mail e senha clica no botão “Entrar”.  
5- O sistema encaminha o usuário para sua tela inicial. 

**Fluxo Alternativo D**

1- O sistema apresenta um formulário e campos E-mail e senha. 
2- O usuário clica no botão “Cadastre-se”. 
3- O sistema encaminha o usuário para tela de cadastro.

### CDU 02

Sistema de Logout

**Fluxo Principal**

1- O sistema exibe a tela inicial da home. 
2- O usuário clica no botão sair. 
3- O sistema exibe um Pop-up de alerta perguntando se o usuário realmente deseja sair. 
4- Usuário clica no botão de confirmação. 
5- O sistema encaminha o usuário para tela de login. 

**Fluxo Alternativo A**

1- O sistema exibe a tela inicial da home. 
2- O usuário clica no botão sair.  
3- O sistema exibe um Pop-up de alerta perguntando se o usuário realmente deseja sair. 
4- Usuário clica no botão de cancelamento. 
5- O sistema mantém o usuário em sua tela incial. 

### CDU 03

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

1. Praesent interdum lectus sit amet augue tincidunt imperdiet.
2. Duis ac dolor vel nisi imperdiet vehicula et non sem.
3. Nunc imperdiet tortor consequat, lobortis purus non, interdum risus.

**Fluxo Alternativo A**

1. Aliquam efficitur arcu ac fermentum egestas.
2. Pellentesque ac diam vitae erat bibendum hendrerit.
3. Mauris sed purus sit amet lectus efficitur placerat et eu diam.
4. Aenean ullamcorper tellus quis nibh porttitor congue.
5. Phasellus laoreet erat eget condimentum dictum.
