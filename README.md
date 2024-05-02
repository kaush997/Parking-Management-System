# Parking-Management-System
01) installed Laravel 10
        composer create-project laravel/laravel:^10.0 parking-management
02) start Laravel's local development server 
        cd parking-management
        php artisan serve
03) installed laravel 10 breeze composer
        composer require laravel/breeze --dev
04) installed laravel 10 breeze package
        php artisan breeze:install
        #blade, dark mode(yes), pest
05) Created database on phpmyadmin
        php artisan migrate
06) installed npm
        npm install
07) run npm run build command and found error
        added "type": "module" to package.json
        then run,
                npm run build
        npm run dev
08) create authorizations for different user accounts