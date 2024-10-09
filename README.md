
# CRUD Laravel - E-Learning

Este projeto é um CRUD simples construído com Laravel, configurado para um ambiente de e-learning.

## Requisitos

- XAMPP (ou outro servidor local)
- Composer
- Node.js e npm

## Configuração do Ambiente

### 1. Instalar o XAMPP

- Baixe e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/download.html).
- Use a versão recomendada para o seu sistema operacional.

### 2. Iniciar o MySQL

- Após a instalação do XAMPP, inicie o MySQL.

### 3. Acessar o phpMyAdmin

- Acesse [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) e crie um banco de dados com o nome **crud_laravel**.

## Instalação do Projeto

### 1. Clonar o Repositório

Abra o terminal e execute os seguintes comandos:

```bash
git clone https://github.com/CarlosMantovani/crud_laravel
cd crud_laravel
cd e-learning
```

### 2. Configurar o Ambiente Laravel

```bash
cp .env.example .env
composer install
composer require laravel/ui
```

### 3. Configurar a Interface do Usuário

```bash
echo no | php artisan ui bootstrap --auth --no-interaction
npm install
npm run dev
```

### 4. Criar Link de Armazenamento

Em um segundo terminal, execute:

```bash
cd crud_laravel
cd e-learning
php artisan storage:link
```

### 5. Configuração do Banco de Dados

- Abra o arquivo `.env` e altere a linha `DB_DATABASE=laravel` para:

```bash
DB_DATABASE=crud_laravel
```

### 6. Migrar e Popular o Banco de Dados

```bash
php artisan migrate
php artisan db:seed
```

### 7. Gerar a Chave da Aplicação

```bash
php artisan key:generate
```

### 8. Executar o Servidor Local

```bash
php artisan serve
```

Acesse o servidor local através do endereço fornecido no terminal, geralmente [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Pronto! O projeto estará rodando no seu ambiente local.
