
# Projeto Ibiz Tech

### Introdução

Este repositório contem o **Projeto Ibiz Tech** que foi desenvolvido por _[Alex Silva - LinkedIn](https://www.linkedin.com/in/alexcssilva/)_.

#### Apresentação do Projeto

Projeto com o objetivo de se criar um CRUD(Create, Read, Update, Delete).  A interface é em card que é uma maneira mais clara para o desenvolvimento de novos dados.

#### A aplicação tem as seguintes funcionalidades:

- Uma página de Registro de Cadastro Público.

#### Tecnologias que foram utilizadas:

 - **Frontend:**
	 - [Vue.Js](https://vuejs.org/guide/introduction.html)
	 - [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
	 - [Axios](https://axios-http.com/ptbr/docs/intro)

 - **Backend:**
	- [Laravel](https://axios-http.com/ptbr/docs/intro)

- **Banco de Dados:**
	- [MySQL](https://dev.mysql.com/doc/)

## Orientações

<details>
  <summary><strong>Softwares Necessários</strong></summary><br />
Certifique-se de ter o seguinte software instalado em sua máquina ou Docker com as imagens:

-   Node.js: [Download](https://nodejs.org/)
-   PHP: [Download](https://www.php.net/downloads.php)
-   Composer: [Download](https://getcomposer.org/download/)
-   MySQL: [Download](https://www.mysql.com/downloads/)
</details>

<details>
  <summary><strong>Iniciando o projeto</strong></summary><br />

 1. Crie um diretório com o nome de sua preferência:

    mkdir  -nome desejado-

 2. Clone o repositório no diretório criado anteriormente abrindo seu terminal coloque o código abaixo:
	 `git clone git@github.com:alexcssilva/Ibiz-Tech.git`

 3. Instale as dependências :
	 `npm install`

#### Configuração do Ambiente

 1. No arquivo `.env.example` altere o nome do arquivo para `.env`com suas informações de ambiente como:

    APP_URL=http://localhost
    DB_CONNECTION=mysql pgsql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_api
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

 ### API

**Popular o banco de dados**

    php artisan db:seed --class=LicitationsSeeder

**Endpoints**

- GET/licitation: retorna a lista de licitações
- GET/licitation/detail/:id_lic: retorna os detalhes de uma licitação
- POST/licitation/form: cria uma licitação
- PUT/licitation/detail/edit/:id_lic: atualiza uma licitação
- DELETE/licitation/detail/:id_lic: deleta uma licitação

</details>
