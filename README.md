# Add rating fields and columns to Filament forms and tables

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mokhosh/filament-rating.svg?style=flat-square)](https://packagist.org/packages/mokhosh/filament-rating)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mokhosh/filament-rating/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mokhosh/filament-rating/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mokhosh/filament-rating/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mokhosh/filament-rating/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mokhosh/filament-rating.svg?style=flat-square)](https://packagist.org/packages/mokhosh/filament-rating)

Add beautiful and customizable rating fields and columns to Filament forms and tables.

## Installation

You can install the package via composer:

```bash
composer require mokhosh/filament-rating
```

Publish the assets so the styles are correct:

```bash
php artisan filament-rating:install
```

## Usage

You can add a rating field to your forms like this:

```php
use Mokhosh\FilamentRating\Components\Rating;

$form->schema([
    Rating::make(),
]);
```

You can add a rating column to your tables like this:

```php
use Mokhosh\FilamentRating\Columns\RatingColumn;

$table->schema([
    RatingColumn::make(),
]);
```

You can add a rating entry to your infolists like this:

```php
use Mokhosh\FilamentRating\Entries\RatingEntry;

$infolist->schema([
    RatingEntry::make(),
]);
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

- [Mo Khosh](https://github.com/mokhosh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
