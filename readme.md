# Huggy

![version](https://img.shields.io/badge/version-5.5-blue.svg)

Sistema teste de cadastro e envio de lembretes por e-mail.

## Start project

Recomendações para execução do projeto:

- Na pasta desejada execute no terminal de comando `git clone https://github.com/luandiego7/huggy-laravel.git`.
- Dentro do projeto copie `.env.exemple` e cole na mesma pasta renomeando para `.env` e configure adequadamente.
- No arquivo `.env`, coloque um email válido em `MAIL_USERNAME` e `MAIL_FROM_ADDRESS`, e a senha do e-mail em `MAIL_PASSWORD`.
- Este projeto está configurado para o gmail, então coloque um e-mail do gmail no passo acima. Caso queira utilizar outro, consulte a documentação do laravel para as cofingurações corretas.
- Acesse o seu banco de dados MySql, e crie um banco de dados chamado `huggy_laravel`, com usuário root e sem senha. Para os testes deste projeto foi utilizado o xampp.
- Dentro da pasta `huggy-laravel` execute no terminal de comando `composer update`.
- E em seguida execute o comando `php artisan key:generate` para gerar uma key (chave) do projeto.
- E em seguida o comando `php artisan migrate:refresh --seed` para migração dos dados no banco MySQL.
- E em seguida o comando `php artisan serve` para inicializar o servidor.
- E por final acesse no navegador desejado o endereço local `http://127.0.0.1:8000` para acesso ao sistema huggy-laravel.


Requisitos para execução do projeto:

- PHP
- MySQL
- Composer

Em caso de problemas para a execução do projeto execute dentro da pasta huggy-laravel no terminal de comando os seguintes comandos abaixo:

- `php artisan cache:clear`
- `php artisan view:clear`
- `php artisan route:clear`
- `php artisan clear-compiled`
- `composer dump-autoload`

## Documentação
A documentação do Laravel está disponível no [website](https://laravel.com/docs/).

## Suporte nos navegadores

![](public/images/readme/browsers/chrome.png)
![](public/images/readme/browsers/firefox.png)
![](public/images/readme/browsers/edge.png)
![](public/images/readme/browsers/safari.png)
![](public/images/readme/browsers/opera.png)
