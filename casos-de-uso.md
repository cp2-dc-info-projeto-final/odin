# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Login
 - [CDU 02](#CDU-02): Logout
 - [CDU 03](#CDU-03): Cadastrar 
 - [CDU 04](#CDU-04): Editar usuário


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

Caso de uso: cadastrar usuário  

**Fluxo Principal**

1- O sistema apresenta um formulário com campos e-mail, nome, sobrenome, senha, confirma sua senha, data de nascimento e telefone(celular) 

2- O usuário insere seus dados pessoais e clicar no botão cadastrar 

3- O sistema armazena as informações do usuário no banco de dados  

4- O sistema encaminha o usuário para tela de login 

**Fluxo Alternativo A**

1- Se o usuário não preencher o campo de e-mail corretamente o sistema irá informa-lo que o campo do e-mail precisa ser preenchido corretamente  

2- O usuário preenchera o campo de e-mail corretamente 

3- O usuário clica no botão cadastrar 

4- O sistema encaminhara para tela de login

**FLUXO ALTERNATIVO B** 

1- Se o usuário não preencher o campo de nome e sobrenome corretamente o sistema irá informa-lo que o campo do nome e sobrenome precisa ser preenchido corretamente 

2- O usuário preenchera o campo de nome e sobrenome corretamente 

3- O usuário clica no botão cadastrar 

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO C** 

1- Se o usuário não preencher o campo de senha e confirma senha corretamente o sistema irá informa-lo que o campo de senha e confirma senha precisa ser preenchido corretamente 

2- O usuário preenchera o campo de senha e confirma senha corretamente  

3- O usuário clica no botão cadastrar 

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO D** 

1- Se o usuário não preencher o campo de telefone(celular) corretamente o sistema irá informa-lo que o campo do telefone(celular) precisa ser preenchido corretamente 

2- O usuário preenchera o campo do telefone (celular) corretamente 

3- O usuário clica no botão cadastrar 

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO E**

1- Se o usuário preencher o campo de data de nascimento e ele for menor de idade o sistema reconhece que essa data e de um menor de idade  

2- O sistema irá informa-lo que não poderá efetuar o cadastro 

3- O usuário preenchera o campo de data de nascimento com uma data valida 

4- O usuário clica no botão cadastrar 

5- O sistema encaminhara o usuário para tela de login  

**FLUXO ALTERNATIVO F** 

1- Se o usuário não preencher nem um dos campos do formulário o sistema irá pedir para que preencha todos os campos corretamente 

2- O usuário preenchera todos os campos corretamente  

3- O usuário clica no botão cadastrar 

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO G**  

1- Se usuário preencher com o campo senha. E o confirma senha não for compatível com a senha 

2- O sistema irá informa-lo que o campo senha e confirma senha não são compatíveis  

3- O usuário irá inserir corretamente os campos 

4- O usuário clica no botão cadastrar  

5- O sistema encaminhara o usuário para tela de login

Caso de uso: editar informações usuário 

###CDU 04

Caso de uso: editar usuário  

**FLUXO PRINCIPAL** 

1- O sistema apresenta um formulário com campos e-mail, nome, sobrenome, sua senha atual, nova senha, confirma sua  nova senha, data de nascimento e telefone(celular) 

2- O usuário atualiza seus dados pessoais e clicar no botão atualizar 

3- O sistema armazena as informações do usuário no banco de dados  

4- O sistema encaminha o usuário para tela de login 

**FLUXO ALTERNATIVO A**   

1- Se o usuário não preencher o campo de e-mail corretamente o sistema irá informa-lo que o campo do e-mail precisa ser preenchido corretamente  

2- O usuário preenchera o campo de e-mail corretamente 

3- O usuário clica no botão atualizar 

4- O sistema encaminhara para tela de login  

**FLUXO ALTERNATIVO B** 

1- Se o usuário não preencher o campo de nome e sobrenome corretamente o sistema irá informa-lo que o campo do nome e sobrenome precisa ser preenchido corretamente 

2- O usuário preenchera o campo de nome e sobrenome corretamente 

3- O usuário clica no botão atualizar 

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO C** 

1- Se o usuário não preencher o campo de senha e confirma senha corretamente o sistema irá informa-lo que o campo de senha e confirma senha precisa ser preenchido corretamente 

2- O usuário preenchera o campo de senha e confirma senha corretamente 

3- O usuário clica no botão atualizar  

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO D** 

1- Se o usuário não preencher o campo de telefone(celular) corretamente o sistema irá informa-lo que o campo do telefone(celular) precisa ser preenchido corretamente 

2- O usuário preenchera o campo do telefone (celular) corretamente 

3- O usuário clica no botão atualizar  

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO E** 

1- Se o usuário preencher o campo de data de nascimento e ele for menor de idade o sistema reconhece que essa data e de um menor de idade 

2- O sistema irá informa-lo que não poderá atualizar sua conta 

3- O usuário preenchera o campo de data de nascimento com uma data valida 

4- O usuário clica no botão atualizar 

5- O sistema encaminhara o usuário para tela de login  

**FLUXO ALTERNATIVO F** 

1- Se o usuário não preencher nem um dos campos do formulário o sistema irá pedir para que preencha todos os campos corretamente 

2- O usuário preenchera todos os campos corretamente  

3- O usuário clica no botão atualizar  

4- O sistema encaminhara o usuário para tela de login 

**FLUXO ALTERNATIVO G** 

1- Se usuário preencher com o campo senha. E o confirma senha não for compatível com a senha  

2- O sistema irá informa-lo que campo senha e confirma senha não são compatíveis  

3- O usuário irá inserir corretamente os campos  

4- O usuário clica no botão atualizar 

5- O sistema encaminhara o usuário para tela de login 
