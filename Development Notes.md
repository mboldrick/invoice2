Development Notes

# Laravel Invoice2 with Bootstrap Project Setup


**2019-11-03**

➜  Sites laravel new invoice2

➜  invoice2 composer require laravel/ui --dev

➜  invoice2 php artisan ui vue --auth

➜  invoice2 git:(master) ✗ npm install

➜  invoice2 git:(master) ✗ npm run dev

** On GitHub, create a repository named invoice2

** Using TablePlus, created MySQL database named “invoice”

** Edited .env file, making the following changes
-   APP_NAME=Invoice2
-   APP_URL=http://invoice2.test
-   DB_DATABASE=invoice2

➜  invoice2 git init

➜  invoice2 git:(master) ✗ php artisan migrate

➜  invoice2 git:(master) ✗ git add .

➜  invoice git:(master) ✗ git commit -m "Initial commit with UI, auth, migrations"

➜  invoice git:(master) git remote add origin https://github.com/mboldrick/invoice2.git

➜  invoice2 git:(master) git push -u origin master

** Create and commit README.md





## Not Executed (yet)

➜  invoice2 git:(master) composer require laravel/telescope

➜  invoice2 git:(master) ✗ php artisan telescope:install

➜  invoice2 git:(master) ✗ php artisan make:model Client -mrf

** Added the following fields to the clients table:
•   Name
•   Address1
•   Address2
•   City
•   State
•   Postalcode
•   Country
•   Email
•   Phone
•   Legacy_id
•   Notes

➜  invoice git:(master) ✗ php artisan migrate

** Create 50 clients using a factory
➜  invoice git:(master) ✗ php artisan tinker
>>> factory(App\Client::class,50)->create();

** Copy bootstrap table structure into client index view

** Use Laravel pagination for clients



