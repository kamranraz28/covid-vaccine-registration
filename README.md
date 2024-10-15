
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

Step-3: rename .env-main to .env

and set up your database.

Step-4: Run Command 

php artisan migrate

this will migrate the required database

Step-5: Run command:

php artisan db:seed

This will create centers to take vaccine

Step-6: Run command:

php artisan serve

This will run the project to your browser

**Please Read-
Whenever a new user will register, a confirmation E-mail with scheduled date, Center name will send to the registered E-mail. And for the scheduling reminder? If you want to test manually that the scheduling task working properly or not, first check there have to be user who has scheduled date tommorrow. If there, run this command:

php artisan schedule:run 

This will send a reminder email to those user show has schedule date on next day.

Thank you. If there is any query, you can mail me here: mdkamranhosan98@gmail.com

