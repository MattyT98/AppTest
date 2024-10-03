project git: https://github.com/MattyT98/AppTest

-if possible download and install Herd to run the project through, 
-extract the zip to the default herd folder normally located in C:\Users\username\Herd\*
-Use a DB service such as DBngin to run the database.
-Use "http://apptest.test/" to access.

Alternatively:

-Download Xammp to run the web server on Apache and MySQL database and PHP
-Install Composer. Open your terminal and type "composer" to check if the installation was successful. (https://getcomposer.org/). 
-Install Laravel Using Composer 
-Run Apache and MySQL.
-inside Xampp install location within a command terminal, run "composer global require "laravel/installer"
-extract the zip to the xammp\htdocs\test folder
-run Apache and MySQL
-access site locally through "http://localhost/test/AppTest/home

Next:

-use "php artisan migrate:refresh -seed" in command terminal to refresh the database