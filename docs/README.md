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

## BANK TRANSFER
### Initiate Transaction
Send money to any Nigerian bank account.
```php
```
### Retry Transaction
Retry a Cancelled transaction.
> Please note that for your safety, transactions can only be retried once within 24 hours of initiation of which its status will then be updated to Retried to prevent you from retrying them again.
```php
```
### Suggest Banks
This resource suggests banks for the recipients' bank account number where they're likely to have an account.
```php
```
### Get Transactions
See all transfers you've done; filter by status, bank code, and more.
```php
```
### Get Retried Trail
See all instances a cancelled (failed and reversed) transaction was retried.
```php
```
### Verify Transaction
Confirm the status of the transaction before giving value to your customers.
```php
```

### Add to Watchlist
Add customers who are under surveillance to Watchlist to control the amount of money that they can withdraw to their bank accounts.
> Kindly save the reference returned in the response on the customer's profile, as it would be used to carry out other activities on the profile.
```php
```

### List Watchlist
See all customers you've added to Watchlist; filter by reference, and more.
```php
```

### Initiate Watchlist Transaction
Send money to customers on Watchlist.
> We recommend that you only use this API if your customers has already been Watchlisted.
```php
```

### List Watchlist Transaction
See all transfers you've done; filter by status, bank code, and more.
```php
```

### Update Watchlist Transaction
Update Watchlist to control the amount of money that your customers can withdraw to their bank accounts.
```php
```

### Remove from Watchlist
Customers who are removed will no longer be controlled by Watchlist.
```php
```

## PAYMENT SUB-ACCOUNT
### Create account
We strongly advice that you pass the real names of your customers gotten from the BVN verification endpoint.
> You'll need to install the sub-account on your account corresponding to the Payment Sub-Account you wish to create.
```php
```

### Callback response
You'll need to setup a PSA callback URL on your account.
> Send a POST request to this endpoint to get a sample response; query your database for the user ID using the sub_account.reference returned and credit their wallet with either the amount or settlement returned. No real money is involved in this transaction.
```php
```

### Get accounts
See all accounts; filter by reference, account number, and more.
```php
```

### Get balance
See all balances in an account.
```php
```

### Get payments
See all payments you've received; filter by reference, account number, and more.
```php
```

### Get statement
See all credits and debits on a sub-account; filter by type, page, and more.
```php
```

### Request debit
Withdraw funds from your customers' sub-accounts.
> Please call the resolve debit endpoint whenever a debit request pends.
```php
```

### Verify payment
We strongly recommend that you verify payments before giving value to your customers.
```php
```

### Resolve payment
Resolve a pending payment.
```php
```
### Enable auto settlement
When enabled, payments are instantly settled to your account when your customers pay you.
> This feature is only available to Kuda PSAs
```php
```

### Disable auto settlement
When disabled, you'll need to call Request debit endpoint to get settled in part or in whole
> This feature is only available to Kuda PSAs
```php
```

### Blacklist account
This feature protects you from fraudulent customers.
> Payments made into blacklisted accounts will be indicated as "blacklisted": "true" in the responses. Please, do not give value until you have verified the legitimacy of the transactions.
```php
```

### Whitelist account
This feature helps you whitelist a once-blacklisted PSA.
```php
```

> ONE-TIME PAYMENT SUB-ACCOUNT

Coming soon

## USSD PAYMENTS
### createUSSDCode
```php
```
### supportedUSSDBanks
```php
```
### verifyUSSDTransaction
```php
```
### getUSSDTransactions
```php
```

## POINT OF SALE

Coming soon

## CARDLESS WITHDRAWAL

Coming soon

## MOBILE AIRTIME

Coming soon

## MOBILE AIRTIME PIN GENERATION

Coming soon

## MOBILE DATA

Coming soon

## WIFI INTERNET

Coming soon

## CABLE TV

Coming soon

## ELECTRICITY

Coming soon

## BETTING

Coming soon

## KNOW YOUR CUSTOMER

Coming soon

## BANK SETTLEMENT

Coming soon

## ONE-TIME PASSWORD

Coming soon

## MISCELLANEOUS

