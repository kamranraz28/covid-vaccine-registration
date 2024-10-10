<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# covid-vaccine-registration
A software to register for the Covid Vaccine online with NID, Informing about schedule date and time after registration via E-mail. And a reminder E-mail will send automatically to the user just before the day at 9PM of vaccination date. After the vaccination date pass over the vaccination status of this user will update to "vaccinated".

Prerequisite:

PHP version: 8.XX; 
Laravel Version: 10.XX; 
Database: Mysql

Steps to run the project:

Step-1: Clone the project from repository. Run Command:

git clone https://github.com/kamranraz28/covid-vaccine-registration.git

this will clone the project to your local server

Step-2: Run command: 

composer update

this will update the environment and package required to run this project.

Step-3: Run command:

php artisan migrate

this will migrate the required database

Step-3: Run command:

php artisan serve

This will run the project to your browser

**Please Read-

***I have used Mailtrap to send Registration Mail and Reminder Mail just before the sceduled date at 9PM (by using laraevl cron job and task sceduling). So, if you want to get E-mail after a successfull E-mail and the reminder just before the scheduled date please create a Mailtrap Account and go to inbox from the dashboard. You will see the host, port, username, password there. Copy them and update to the .env file

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=9d900a91ef3bb3
MAIL_PASSWORD=916b773ce7d598
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=kamranraz28@gmail.com.com
MAIL_FROM_NAME="${APP_NAME}"

As now you can see these are my accounts credentials I tested. And after updating this, whenever a new user will register, a confirmation E-mail with scheduled date, Center name will send to the mailtrap (you can see this from mailtrap inboxes). And for the scheduling reminder? If you want to test manually that the scheduling task working properly or not, first check there have to be user who has scheduled date tommorrow. If there, run this command:
php artisan schedule:run 
This will send a reminder email for the user (you can see this from mailtrap inboxes).

Thank you. If there is any query, you can mail me here: mdkamranhosan98@gmail.com
>>>>>>> 768a2d0c9b78f8c7c46f2912a81b3a5f95da94b1
