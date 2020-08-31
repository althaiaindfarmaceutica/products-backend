# Prezado(a) candidato(a),

## Você foi selecionado(a) para a segunda etapa do processo seletivo da Althaia

Estamos muito felizes com seu interesse em trabalhar conosco, pois queremos criar um time engajado em solucionar problemas e melhorar processos de clientes internos da empresa.
Nesta etapa vamos avaliar suas habilidades em programação.

Para começar faça um fork do repositório: Althaia | Equaliv - Products Back-End, com o fork criado inicie o desenvolvimento publicando o andamento do seu projeto, ao finalizar faça um pull-request para que possamos avaliar.

O desafio consiste em realizar a criação de uma API onde o usuário terá que primeiro se autenticar com JWT para que ele possa realizar o CRUD de um cadastro simples de medicamento, a API deve ser documentada utilizando o Swagger.

## O Teste

\*\*Use o banco de dados que desejar.

\*\*O Usuário deve ter ID, name, email, password

\*\*O Produto deve ter ID, name, description, company, user_id;

**Validação dos dados**:

-   User
    -   id (Integer, Incremental)
    -   name (String, Required)
    -   email (String, Unique, Required)
    -   password (String, Required)
-   Product
    -   id (Integer, Incremental)
    -   name (String, Required)
    -   description (Text)
    -   company (String, Required)
    -   user_id (Deve ser preenchido ao enviar a requisição de criação)

**Endpoints API**

-   /v1/auth/register (POST)
    -   name
    -   email
    -   password
-   /v1/auth/login (POST)

    -   email
    -   password

-   /v1/auth/logout (POST)

    -   Headers (Authorization Bearer)

-   /v1/products (GET) **AUTH JWT**

    -   Retorna a lista de produtos cadastrados por usuário

-   /v1/products/{id} (GET) **AUTH JWT**

    -   Retorna um produto

-   /v1/products (POST) **AUTH JWT**

    -   Cadastra um novo produto para o usuário autenticado;
        -   name
        -   description
        -   company

-   /v1/products/{id} (PUT) **AUTH JWT**

    -   Atualiza o produto;
        -   name
        -   description
        -   company

-   /v1/products/{id} (DELETE) **AUTH JWT**
    -   Deleta o produto

**Observações importantes:**

-   Você deve usar o Laravel para desenvolver a API;
-   Você deve documentar os endpoint usando utilizando o swagger

**Bonus points:**

-   Utilizar docker, docker-compose ou docker swarm para criar a stack de desenvolvimento;
-   Dependency injection;
-   Enviar um e-mail ao usuário quando o mesmo deletar um produto;

Obrigado pela participação, havendo dúvidas fique a vontade para me contactar.

Rafael Meira - rafael.meira@althaia.com.br
