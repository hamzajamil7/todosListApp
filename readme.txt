To run this project on your system

.First install visual studio code, composer , Xammp, laravel, laravel breeze and livewire

to install breeze Run this command

composer require laravel/breeze --dev

after that run that command 

php artisan breeze:install

then choose Livewire (Volt class API) with Alpine
then choose dark mode yes 
then choose testing framework PhpUnit


And Then after that start the xammp server and open the folder in visual studio code 


copy the env example file and make a new file name as .env and paste the copied material into that.


Then run the following commands in the VS code terminal 

composer install

php artisan key:generate

npm i 

php artisan migrate (IN this command it ask you to create a new database click on yes and it will create your database same name as which you give in env)

npm run dev

npm run build

then after that run the command "php artisan serve" to start the project.


Then go to the web page and register yourself set the credentials and after that you can add,edit,delete,mark as read the todos also you can change  your profile name in the profile section  


Also the screenshots of the UI is placed in the folder named as UI ScreenShots.

Test cases file is also present in this named as TestCases.txt