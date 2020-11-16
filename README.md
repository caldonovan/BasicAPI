# BasicAPI

## About

BasicAPI is pretty much what is says on the tin. It is a basic implementation of an API using Laravel 8.
Note that the .env is included, which typically would not be, but it does not contain any sensitive information and thus was 
included just for convenience. 

## Installation

Clone the repo locally:

``git clone https://github.com/caldonovan/BasicAPI.git``

``cd BasicAPI``

Install Composer dependencies:

``composer install``

Install NPM dependencies:

``npm ci``

Build assets:

``npm run dev``

Setup env file:

``cp .env.example .env``

Generate app key:

``php artisan key:generate``

Create an SQLite database:

``touch database/database.sqlite``

Run migrations and seed:

``php artisan migrate:fresh --seed``

Serve using PHP local server:

``php artisan serve``

To run tests:

``phpunit``
