# Web Art Factory

A Laravel 10 business application using **Filament for administration**, Laravel Sanctum for API authentication, and a conventional Laravel backend structure.

## Overview

The project explores building an admin-driven business application with a dedicated management interface, authenticated API access, database-backed workflows, and Laravel's standard application architecture.

## Tech Stack

- PHP 8.1+
- Laravel 10
- Filament 2
- Laravel Sanctum
- Laravel Breeze
- MySQL / Laravel Eloquent
- Guzzle
- PHPUnit
- Laravel Sail

## Key Engineering Areas

- Admin dashboard and resource management with Filament
- Authentication and protected routes
- API authentication with Sanctum
- Database migrations, factories, and seeders
- Validation and business workflows
- HTTP integrations with Guzzle
- Automated testing configuration
- Local containerized development with Laravel Sail

## Run Locally

```bash
git clone https://github.com/Shraban-7/web-art-factory.git
cd web-art-factory
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

## Project Notes

This is an earlier Laravel 10 project and is useful as evidence of experience with **Filament-based admin systems and Laravel application architecture**. My current professional direction is backend-focused Laravel engineering with deeper API, testing, performance, queue, and deployment practices.

## Author

**Shraban Hossain**

- GitHub: https://github.com/Shraban-7
- Portfolio: https://www.devshraban.com/
- LinkedIn: https://www.linkedin.com/in/shakuat-shraban/
