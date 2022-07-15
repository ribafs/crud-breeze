# CRUD com Laravel 9 Breeze e Tailwind

## Meu primeiro CRUD com Breeze e Tailwind

Estou usando a versão 9.20.0 do Laravel

Segui o tutorial abaixo

https://bittenbook.com/laravel-9-tutorial-using-breeze/

Instalei o laravel 9
```
composer create-project laravel/laravel crud-breeze
cd crud-breeze
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run build
```
Criar o arquivo para a SQLite. Se preferir use MySQL ou outro suportado

touch database/database.sqlite

Copiei o .env.example para .env e deixei a configuração assim:

DB_CONNECTION=sqlite
DB_DATABASE=/home/ribafs/crud-breeze/database/database.sqlite

Segui o tutorial e criei este aplicativo (veja detalhes no link acima)

Usei o arquivo abaixo como menu

resources/views/layouts/navigation.blade.php

## Paginação

Adaptei do código gerado pelo 

https://github.com/appzcoder/crud-generator

php artisan key:generate

php artisan serve

http://127.0.0.1:8000/register

Crie um usuário e acesse com ele.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
