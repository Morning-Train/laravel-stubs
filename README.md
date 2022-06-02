# Opinionated Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/morningtrain/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/morningtrain/laravel-stubs)
![GitHub Tests Action Status](https://github.com/Morning-Train/laravel-stubs/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/morningtrain/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/morningtrain/laravel-stubs)

This repo contains opinionated versions of the Laravel stubs. The most notable changes are:

- migrations don't have a `down` function
- controllers don't extend a base controller
- none of the model attributes are guarded
- use return type hints where possible
- most docblocks have been removed

## Installation

You can install the package via composer:

```bash
composer require morningtrain/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan morningtrain-stub:publish --force"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan morningtrain-stub:publish
```

## Testing

``` bash
composer test
```

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
