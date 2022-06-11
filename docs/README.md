# Laravel Redbiller Package

> A Laravel Package for working with Redbiller seamlessly.


[![Latest Version on Packagist](https://img.shields.io/packagist/v/LPMatrix/laravel-redbiller.svg?style=flat-square)](https://packagist.org/packages/LPMatrix/laravel-redbiller)
[![Total Downloads](https://img.shields.io/packagist/dt/LPMatrix/laravel-redbiller.svg?style=flat-square)](https://packagist.org/packages/LPMatrix/laravel-redbiller)


# Installation

You can install the package via composer:

```bash
composer require lpmatrix/laravel-redbiller
```

# Configuration

You can publish the configuration file using this command:

```bash
php artisan LPMatrix:publish --provider="LPMatrix\Redbiller\RedbillerServiceProvider"
```

A configuration-file named `redbiller.php` with some sensible defaults will be placed in your `config` directory:

```php
<?php

return [

    /**
     * Secret Key From Redbiller Dashboard
     *
     */
    'secretKey' => getenv('REDBILLER_SECRET_KEY');

    'paymentUrl' => getenv('REDBILLER_URL');

];
```

# Testing

```bash
composer test
```

# Functionalities

> BANK TRANSFER
## initiateTransaction
```php
```
## retryTransaction
```php
```
## suggestBanks
```php
```
## getTransactions
```php
```
## getRetriedTrail
```php
```
## verifyTransaction
```php
```


> PAYMENT SUB-ACCOUNT

Coming soon

> ONE-TIME PAYMENT SUB-ACCOUNT

Coming soon

> USSD PAYMENTS
## createUSSDCode
```php
```
## supportedUSSDBanks
```php
```
## verifyUSSDTransaction
```php
```
## getUSSDTransactions
```php
```

> POINT OF SALE

Coming soon

> CARDLESS WITHDRAWAL

Coming soon

> MOBILE AIRTIME

Coming soon

> MOBILE AIRTIME PIN GENERATION

Coming soon

> MOBILE DATA

Coming soon

> WIFI INTERNET

Coming soon

> CABLE TV

Coming soon

> ELECTRICITY

Coming soon

> BETTING

Coming soon

> KNOW YOUR CUSTOMER

Coming soon

> BANK SETTLEMENT

Coming soon

> ONE-TIME PASSWORD

Coming soon

> MISCELLANEOUS

