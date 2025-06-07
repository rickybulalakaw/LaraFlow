# LaravelFlowbite

Laravel Core with Flowbite

# Status

This repository serves as starting point for Laravel 12 with Flowbite

# Included Packages 

This repository already includes the following packages: 

1. Laravel Spatie Activity Logs
2. Laravel Socialite
3. AWS S3 
4. Laravel Modules 
5. Jetstream (with Livewire)


# Installation

## System Requirements

IHRIS-Gov is recommended to be installed in a Linux Operating System with the following software / packages:

1. PHP 8.3 or higher
2. MySQL 8.0 or higher
3. NPM 10
4. Latest Composer
5. Mailpit 

For Development, the command "composer dev" includes mailpit, which is assumed to be installed in the development environment.

For logical organization, the project uses Laravel Modules, so Models and Views are organized within their own respective modules. However, Livewire components and Layout templates are centralized for tighter integration with NPM and Tailwind.

## Application Deployment Steps

1. Clone repository. If for production, clone code to appropriate directory.
2. Go to project folder, then copy .env.example to local .env

    ```
    cp .env.example .env
    ```

3. Update the values in the .env file, including MySQL. SMTP, etc.
4. Install PHP packages

    ```
    composer install
    ```

    As necessary, update composer packages: 

    ```
    composer update
    ```

5. If for development, generate application key.

    ```
    php artisan key:generate
    ```

    Otherwise, copy old APP_KEY value from previous production installation.

6. Install NPM pckages

    ```
    npm install
    ```

    ```
    npm run build
    ```

7. Run migration

    ```
    php artisan migrate
    ```

8. Run database seeder

    ```
    php artisan db:seed
    ```

9. Deploy

    a. If for development:

    ```
    composer dev
    ```

    b. If for production:

    ```
    npm run build
    ```


## Production Deployment Considerations

1. Disable the OfficeHeadSeeder in DatabaseSeeder.

# Development Instructions

1. The application utilizes Laravel Modules for modular development, mainly for easier organization of Model, Controller, and Migration, and web routing files. However, Composer and NPM packages are all installed in the main app. This is to fully utilize the benefit of the automatic refresh of NPM assets and easier deployment in production.

    Consequently, all Blade and Livewire assets are in the main app's corresponding folders, with their own respective subdirectories. For example, all Performance Module-related Livewire files are under `resources\views\livewire\performance` folder; its Blade files are under `resources\views\performance` folder; and its component files are under `resources\views\components\performance` folder.

2. On deciding whether to use Jobs or Events and Listeners: Use Jobs for system-initiated or time-based functions, and use Event-Listeners for user action-dependent functions. For functions that are triggered by jobs, use determine if they can be included in the same job. If not, use Events and Listeners.

# Credits

This application was developed with Laravel 12.

This project is developed using [Laravel 11](https://laravel.com). Read the **original** Laravel [README.md](LARAVEL.README.md).
# LaraFlow
