
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

php artisan db:seed

This will create centers to take vaccine

Step-5: Run command:

php artisan migrate

this will migrate the required database

Step-6: Run command:

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
