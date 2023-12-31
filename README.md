This Project was built using <a href="https://laravel.com" target="_blank">Laravel</a>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Notes from Course
command to create a file used for migrations for a specific mysql table=> php artisan make:migration create_table_name

command to run all migrations=> php artisan migrate

the database seeder is to create dummy users

command to seed database(create dummy data)=> php artisan db:seed

command to rollback all migrations=> php artisan migrate:refresh

command to rollback migrations and seed database to update tables=> php artisan migrate:refresh --seed

LEARN CONTENT IN ONE HOUR => [
    setting up laravel, 
    routing and responses,
    wildcard endpoints
    route constraints,
    die-dump-debug helpers,
    request and query parameters(ex.search?name=Tadeo&age=21),
    API routes,
    View Basics and Passing Data,
    Blade Templates and Basic Directives,
    Creating a basic Model,
    Database setup and config,
    Creating Database Migrations,
    Running Migrations,
    Database Seeding,
]
