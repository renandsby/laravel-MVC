Setup Docker Laravel 11 com PHP 8.3

Assine a Academy, e Seja VIP!

Passo a passo

Clone Repositório

git clone -b laravel-11-with-php-8.3 https://github.com/especializati/setup-docker-laravel.git app-laravel
cd app-laravel
Suba os containers do projeto

docker-compose up -d
Crie o Arquivo .env

cp .env.example .env
Acesse o container app

docker-compose exec app bash
Instale as dependências do projeto

composer install
Gere a key do projeto Laravel

php artisan key:generate
OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)

touch database/database.sqlite
Rodar as migrations

php artisan migrate
Acesse o projeto http://localhost:8000
