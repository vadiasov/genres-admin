## Laravel GenresAdmin
This package creates DB genres (music genres). The packages serves CRUD pages of genres in administrative panel.

It includes a ServiceProvider to register the package and attach it to the output. 
It includes migrations to create DB genres.

## Installation
Add the package to root composer.json:
````
"require": {
        ...
        "vadiasov/genres-admin": "^1.0.0",
  }
````
Then run:
````
composer update
````
Register package in config/app.php
````
'providers' => [
        /*
         * Package Service Providers...
         */
        Vadiasov\GenresAdmin\GenresServiceProvider::class,
````
Create model:
````
php artisan make:model Genre
````
Publish migrations and seeds. Run:
````
php artisan vendor:publish
````
and enter appropriate number of this package (see terminal output after last command).


Migrate:
````
php artisan migrate
````
Seed
````
php artisan db:seed --class=GenresSeeder
````

## Routes
The routes are in the package:
````
admin/genres
admin/genres/create
admin/genres/{id}/edit
admin/genres/{id}/delete
````
