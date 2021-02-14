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
- Dentro da pasta `huggy-laravel execute no terminal de comando `php artisan migrate:refresh --seed` para criar as tabelas no banco de dados, e em seguida `composer update` para instalar as bibliotecas.
- E em seguida execute o comando `php artisan key:generate` para gerar uma key (chave) do projeto.
- E em seguida o comando `php artisan serve` para inicializar o servidor.
- E por final acesse no navegador desejado o endereço local `http://127.0.0.1:8000` para acesso ao sistema huggy-laravel.

- Para ativar o cron de envio dos emails com lembrete, primeiro execute o comando no terminal `crontab -e` e copie, cole e salve o arquivo com o seguinte comando: 
- para linux: `* * * * * php /opt/lampp/htdocs/huggy-laravel/artisan schedule:run 1>> /dev/null 2>&1` 
- para macos: `* * * * * /usr/local/bin/php /Applications/XAMPP/xamppfiles/htdocs/huggy-laravel/artisan schedule:run >> /dev/null 2>&1`
- par windows: `* * * * * php C:\xampp\htdocs\huggy-laravel\artisan schedule:run >> /dev/null 2>&1`

- Agora vá na pasta do projeto: `huggy_laravel/app/console/Kernel.php` e descomente a linha 33 e 45. 
- Execute no terminal o comando `php artisan schedule:run`

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
