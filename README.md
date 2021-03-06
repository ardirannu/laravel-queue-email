<h1 id="title">Laravel Queue and Jobs for Email delivery</h1>

<p id="description">Using Laravel Queue and Jobs for Email delivery with Gmail SMTP Server</p>

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/ardirannu/laravel-queue-email.git laravel-queue-email
composer install
cp .env.example .env
```

Then create the necessary database.

```
php artisan db
create database email-queue
```

And run the initial migrations and seeders.

```
php artisan migrate --seed
```

Setup SMTP Server.

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=your gmail adresss
MAIL_PASSWORD=your gmail password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=admin@queue-tes.com
MAIL_FROM_NAME="${APP_NAME}"
```
  
<h2>💻 Built with</h2>

Technologies used in the project:

*   Laravel
*   SMTP server


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Author

Ardianto Rannu
