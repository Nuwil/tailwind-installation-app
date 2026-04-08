## issue: the codebase was 8.3-5
- the device has current 8.2.12
- that is why it cannot run
## fix issue:
- downgrade composer
    "require": {
        "php": "^8.2",
        "laravel/framework": "^12.0",
        "laravel/tinker": "^3.0"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pail": "^1.2.5",
        "laravel/pint": "^1.27",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.6",
        "phpunit/phpunit": "^11.5"
    },
- then run 'composer require --dev phpunit/phpunit:"^11.5"'
- to fix the issue when doing composer install -> update -> npm install -> run build -> php artisan key:generate -> migrate -> serve