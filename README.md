# Gerenciamento de Funcionários
Aplicação web para gerenciamento de funcionários feito em Laravel.

### Ter Instalado
- PHP 7
- Composer

### Uso da Aplicação
- Criar arquivo `database.sqlite` na pasta **database**
- No arquivo `.env` colocar `sqlite` em **DB_CONNECTION** e comentar as linhas abaixo (com hashtag no começo da linha):
    - DB_HOST
    - DB_PORT
    - DB_DATABASE
    - DB_USERNAME
    - DB_PASSWORD
-   Gerar migrations: `php artisan migrate`
-   Subir servidor: `php artisan serve`
- **URL**: http://127.0.0.1:8000/
