# Timedoor Coding Bootcamp Examination 
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
> Develop based on [Laravel v9](https://laravel.com/docs/9.x)

## Table of contents

- [Prerequisites](#prerequisites)
- [Setup](#setup)
- [Database setup](#database-setup)
- [Running the app](#running-the-app)

## Prerequisites

- PHP ≥ 8

Please install these extensions on your code editor :

- [laravel intellisense](https://marketplace.visualstudio.com/items?itemName=mohamedbenhida.laravel-intellisense)

## Setup

1. Clone this Repository
```sh
$ git clone https://github.com/akhmadrizki/timedoor-exam.git
```
2. Copy file `.env.example` to `.env`:
```sh
$ cp env-example .env
```
3. Install all package
```sh
$ composer install
```

## Database setup

```sh
...
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=
...
FAKER_LOCALE=id_ID
```

- Run this command:
```sh
$ php artisan key:generate
$ php artisan migrate:fresh --seed
```

## Running the app

```sh
$ php artisan serve
```

### Thanks
