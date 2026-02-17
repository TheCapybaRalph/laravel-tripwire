# This is a tripwire package

## Installation

You can install the package via composer:

```bash
composer require thecapybaralph/laravel-tripwire
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-tripwire-config"
```

This is the contents of the published config file:

```php
return [
    'enabled' => env("TRIPWIRE_ENABLED", "true"),

    'index_file_path' => env("TRIPWIRE_INDEX_FILE_PATH"), // defaults to public_path('index.php')
];

```

## Usage

```php
use TheCapybaralph\Tripwire\Facades\Tripwire;

$tripwire = Tripwire::run(); // returns true if check passes
```

You can also add this to your schedule
```php

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [TheCapybaRalph](https://github.com/TheCapybaRalph)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
