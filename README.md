# teste_ecode

git clone https://github.com/CarlosMantovani/teste_ecode

instalar o xammp atraves desse site https://www.apachefriends.org/download.html com essa versao

iniciar o mysql e o apache

acessar http://localhost/phpmyadmin/

criar um banco chamado crud_laravel

acessar o terminal do vscodo e digitar cd teste_ecode 

cd e-learning

depois digitar 'mv .env.example .env'

composer install

no arquivo .env mudar DB_DATABASE=laravel para DB_DATABASE=crud_laravel

php artisan migrate

php artisan key:generate

php artisan serve

agora so acessar server que ele te forneceu 

