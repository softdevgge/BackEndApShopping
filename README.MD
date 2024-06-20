# Back End Api for a Shopping project
## Problem :
Generates a backend api for a Shopping project
## Solution Approach:
CRUD Rest API in PHP, using:
Laravel (PHP framework)

Composer (PHP package manager)

Postgres (database)

Docker

Docker Compose


## Explanation

- Install PHP and Required Extensions
- Install Composer
- Install Laravel

git pull .......

php artisan serve

- with docker

docker-compose up -d mysqldb

To check if it's running, you can use the following command:
docker-compose logs

Build the project
docker-compose build

Now we can run the project.

docker-compose up laravelapp


Apply the migrations

docker-compose exec laravelapp php artisan migrate


