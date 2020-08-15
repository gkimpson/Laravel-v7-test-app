Laravel 7.x test application

Change the app & db values in the .env
create the required database e.g mysql -u root -p (password is 'password')
run php artisan migrate (for db tables)

https://laravel.com/docs/7.x/frontend
to setup built-in auth use the following : 
$ composer require laravel/ui 
$ php artisan ui [bootstrap|vue|react] (select one)
$ php artisan ui bootstrap --auth
now go back to the app and try to register user, login & logout

