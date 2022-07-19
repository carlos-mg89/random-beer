Random beer app
===================================

## Requirements

Only `Composer` and `Docker Compose` are required.

## How to set up environment

Run `docker-compose up`

After that the following Docker containers will be up and running:

- PHP service
- MariaDB service (which will have a volume attached so state is persisted across different startups)
- Nginx service

## Initial data

There are some Doctrine fixtures that are inserted into the database every time you start the Docker services.

Basically, some beers will be added.

## Access web app

You can visit it on `127.0.0.1` if running the app locally.

Alternatively, you could access the link https://randombeer.walkaholic.me

## Access database

Review the docker-compose.yml to check for all DB info.

## Running tests

Run: `bin/phpunit`
