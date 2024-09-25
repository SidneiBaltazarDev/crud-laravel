# CRUD Laravel - Projeto Didático

Este é um projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido em Laravel, com o objetivo de praticar e demonstrar conceitos básicos de desenvolvimento web e o funcionamento de operações de banco de dados em um ambiente PHP. O projeto foi criado para fins didáticos e aprendizado.

## Tecnologias Utilizadas

- **Laravel 10.x** - Framework PHP para o desenvolvimento web.
- **PHP 8.x** - Linguagem de programação utilizada.
- **MySQL** - Banco de dados relacional.
- **Composer** - Gerenciador de dependências PHP.
- **Node.js** - Para gerenciamento de pacotes de front-end (via NPM).

## Funcionalidades

- **CRUD Completo** - Criação, leitura, atualização e exclusão de registros.
- **Interface Simples** - Interface básica para demonstrar o funcionamento do CRUD.
- **Validação de Dados** - Utilização das regras de validação do Laravel para garantir integridade dos dados.
- **Mensagens de Sucesso/Erro** - Feedback visual para as ações realizadas (salvar, editar, deletar).
- **Autenticação** - Sistema básico de autenticação utilizando as ferramentas nativas do Laravel.

## Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/SidneiBaltazarDev/crud-laravel


cd nome-do-repositorio

2. Navegue até o diretório do projeto:

    cd nome-do-repositorio  

3. Instale as dependências do PHP com o Composer:

    composer install

4. Instale as dependências de front-end:

    npm install

5. Crie o arquivo .env com base no arquivo .env.example:

    cp .env.example .env

6. Gere a chave da aplicação:

    php artisan key:generate


7. Configure o banco de dados no arquivo .env:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=usuario
    DB_PASSWORD=senha


8. Execute as migrações para criar as tabelas no banco de dados:

    php artisan migrate


9. Inicie o servidor local:

    php artisan serve

