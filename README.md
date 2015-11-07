# Laravel 5 domain localization
A tool for easy domain based localization in Laravel 5 applications.

## Installation
_This package is build for [Laravel framework](http://laravel.com) based applications._

### Requirements
- PHP >= 5.4.0
- Laravel 5+

### Composer installation
You must modify your `composer.json` file and run `composer update` to include the latest version of the package in your project:

```json
"require": {
    "bastiendonjon/laravel-domain-localization": "1.0.*"
}
```

Or you can run the `composer require` command from your terminal:

```
composer require bastiendonjon/laravel-domain-localization:1.0.x
```

### Service provider
Open `app/config/app.php` and register the required service provider.

```php
'providers' => [
    'BastienDonjon\LaravelDomainLocalization\Provider\DomainLocalizationServiceProvider',
]
```

Make config file :

```
php artisan vendor:publish"
```

## Usage
Th Laravel Domain Localization get tld to switch locale. See config file to match tdl with locale.

For example, when you add the dutch locale `fr` the user could access two different locales, using the following addresses:

```
http://example.com
http://example.fr
```