# Parking-Management-System
01) installed Laravel 10
        //composer create-project laravel/laravel:^10.0 parking-management
02) start Laravel's local development server 
        //cd parking-management
        //php artisan serve
03) installed laravel 10 breeze composer
        //composer require laravel/breeze --dev
04) installed laravel 10 breeze package
       //php artisan breeze:install
        #blade, dark mode(yes), pest
05) Created database on phpmyadmin
        //php artisan migrate
06) installed npm
        //npm install
07) run npm run build command and found error
        added "type": "module" to package.json
        then run,
                //npm run build
        //npm run dev
08) create authorizations for different user accounts
        //php artisan make:seeder UsersTableSeeder
        changed userFactory
        changed DatabaseSeeder
09) Refresh database migrations
        //php artisan migrate:fresh --seed
10) Added routes to web.php to create different user dashboards
11) created new controller using terminal
        //php artisan make:controller SadminController
12) Created folders inside the views for multiple roles
        created sadmin_dashboard.blade.php file inside sadmin folder in views
13) Generate simple html file by typing "!" and press enter key.
14) watch route list
        //php artisan r:l
15) Updated AuthenticatedSessionController by adding if else function
16) Changed accessibiliry by restriceted access from user account to other all accounts.
        created middleware by using,
        //php artisan make:middleware Role
        Updated Kernel.php
        Updated web.php
17) Changed login with Email/Username,
        Edited login.blage.php
        Edited LoginRequest.php
18) Created clients table with its Client model
        php artisan make:migration create_clients_table
        php artisan make:model Client
        php artisan migrate
        php artisan migrate:fresh --seed