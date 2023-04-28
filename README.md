# ![Online Constacs APP](logo.png)

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you
start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker).

Clone the repository

    git clone https://github.com/Lava15/test-task-feedbacks

Switch to the repo folder

    cd test-task-feedbacks

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Start the local development 

    php artisan serve

You can now access the server at http://localhost:{'YOUR-PORT'}

Generate a new application key

    php artisan key:generate

(**Set the database connection in .env before migrating**)
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

Run the database migrations

    php artisan migrate
