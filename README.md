# Laravel-Ari (Laravel Asterisk REST Interface)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/laravel-ari.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-ari)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/soap/laravel-ari/run-tests?label=tests)](https://github.com/soap/laravel-ami/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/soap/laravel-ari/Check%20&%20fix%20styling?label=code%20style)](https://github.com/soap/laravel-ari/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/laravel-ari.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-ari)


Laravel package to access Asterisk IP PBX REST services.

## Installation

You can install the package via composer:

```bash
composer require soap/laravel-ari
```

You can publish and run the migrations with:


You can publish the config file with:
```bash
php artisan vendor:publish --provider="Soap\Ari\AriServiceProvider" --tag="laravel-ari-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravelAri = new Soap\Ari();
echo $laravelAri->echoPhrase('Hello, Soap!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
