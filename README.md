# booking-portal
Welcome to the page booking portal

This Application consists HTML,CSS,SCSS,JS.JQUERY,TWIG AND DOCTRINE ORMS

To run this project you can directly run by making the server controlller to public directory public/index.php file executed initially then the file call the alto router (router script used in this app) then all the files are accessible 

innodb is used for the database connection.
The Database Connection type pdo_mysql is used in this app.
To change database connection navigate to Bootstrap/Doctrine.php file. in this file the variable $connection_parameters array consists the database connection

doctrine/orm are used for database connection for the fastest way it takes data from database makes cache itself it loads the data quickly which is used frequently
doctirne supports all types of data connection. From those im used PDO_MYSQL type data conncection for this app
doctrine make setter and getters methods that mapped to the database so its easy to use and retrive data efficently in programs.
doctrine cavhe loads data faster then native sql methods for the frequently used datas.

doctrine/orm  used for the database connection. to create a database enviroinment its simple by run the commands that given below its requires php enviroinment for creatating table structure.
by running the commands below : will create table in the database (connection parameters can be set in the file "Bootstrap/Doctrine.php")

run commads in console with php enviroinment

commands :

" php ../vendor/bin/doctrine orm:schema-tool:create " - This commmand for creating a tables and structures defined in the entities

" php ../vendor/bin/doctrine orm:schema-tool:update " - this commmand used to update the database table if the database aleady a defined structure this commmand used to update  the strucure

" php ../vendor/bin/doctrine orm:schema-tool:update --force " if the previous commmands not works try to use with force it will updates table schema

Database relates php class files are stored in th locayion App/Entities and App/Repositories
App/Entities has the files that contains full database schema informations like table name, column name, column type, keys name etc.. 
App/Repository contains the PHP Classes that will works for the database for stroring and retriving datas from the database

Routing is used by using altorouter framework.
this routing framework helps the app to work properly to manage the activity login activity user activity  and gives safeguard to the app
routing involves the main part of the execution of the program.

Twig is a powerful secured framework for the php based apllications. because twig has addtional security layer that blocks the sensitive information leaks.
twig template engine is used for this application. Twig template engine is used for the pupose of inheritance of the templates eith other templates.
twig files stored with the extension twig Filename.twig it contains the html,css and js codes.
Login, registration and adding products can be with the ajax request with javascript code.

Email verification also enabled with this application. if the user creates a new account email directly sends to the user.
user need to click on the email to verify their identity 

resend verification link, forget passwordlink also under progress.

nowits not implemented fully but implements partial functions
