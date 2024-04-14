# teste_ecode
# Configuração do banco:

instalar o xammp atraves desse site https://www.apachefriends.org/download.html com essa versao

iniciar o mysql

acessar http://localhost/phpmyadmin/

criar um banco chamado crud_laravel

# No primeiro terminal digitar os comandos:

git clone https://github.com/CarlosMantovani/crud_laravel

cd crud_laravel

cd e-learning

cp .env.example .env

composer install

composer require laravel/ui

echo no | php artisan ui bootstrap --auth --no-interaction

npm install

npm run dev

# Abrir um segundo terminal e digitar os comandos:

cd crud_laravel

cd e-learning

php artisan storage:link

No arquivo .env mudar DB_DATABASE=laravel para DB_DATABASE=crud_laravel

php artisan migrate

php artisan db:seed

php artisan key:generate

php artisan serve

agora so acessar serve que ele te forneceu 

