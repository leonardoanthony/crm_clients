# :computer: Desafio Desenvolvedor de Software – EAD

### Projeto: CRM Clients

---

## Objetivo

- Desenvolver uma aplicação web de cadastro de clientes para uma academia
chamada Força do Hábito.

## Funcionalidades

- Criar três tabelas no banco de dados são elas: usuario, cliente e categoria;
- Os campos da tabela ficará a seu critério sendo, todavia na tabela usuario será
obrigatório a criação do campo perfil e na tabela de clientes é necessário a criação
do campo idcategoria para fazer chave estrangeira com a tabela categoria.
- Criar tela de login;
- Criar a Tela Principal que terá dois menus Cadastrar e Relatório, localizados na
parte superior;
- No menu Cadastrar deve ter as opções Usuário, Cliente e Categoria;
- No menu Relatório deve ter as opções Usuário, Cliente e Categoria;
- Criar três formulários, Cadastro de clientes, Cadastro de Usuários e Cadastro de
Categorias;
- Criar três relatórios um de Clientes, Usuários e Categorias;
- Botão de Editar e Delete nos registros dos relatórios de clientes, usuários e
categorias;
- As categorias a serem cadastradas são: Grátis, Normal e Prêmio;
- Ao clicar em Delete deve exibir mensagem de confirmação antes de deletar;
- No relatório de clientes mostrar colocar a coluna categoria. Mostrar as categorias em
cores diferentes;
- Tela de Dashboard com um gráfico do tipo pizza mostrando a quantidade de cliente
Grátis, Normal e Prêmio;
- Ao logar, irá aparecer a Tela Inicial, todavia, o usuário que tem o perfil visualizar não
irá aparecer o menu Cadastrar somente o menu Relatório;

## Configuração

- Recomento instalar o XAMPP para uso como servidor local
- Inicie o servidor Apache e o MySQL
- Faça a importação do banco de dados (Arquivo: crm-clients.sql) no PHPMyAdmin
- A pasta do projeto coloque em C:\xampp\htdocs\
- Após isso basta ir no navegador de sua preferência e digitar http://localhost/crm_clients/
- Login: admin | Senha: admin
