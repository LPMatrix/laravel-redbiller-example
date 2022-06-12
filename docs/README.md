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
> Send a ### request to this endpoint to get a sample response; query your database for the user ID using the sub_account.reference returned and credit their wallet with either the amount or settlement returned. No real money is involved in this transaction.
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

## ONE-TIME PAYMENT SUB-ACCOUNT
We strongly advice that you pass the real names of your customers gotten from the BVN verification endpoint.
### Create account

```php
```
### Verify payment
```php
```
### Get payments
See all payments you've received; filter by reference, account number, and more.
```php
```

## USSD PAYMENTS
### Create USSD Code
We strongly advice that you pass the real names of your customers gotten from the BVN verification endpoint.
```php
```
### Supported USSD Banks
Get all supported banks.
```php
```
### Verify USSD Transaction
```php
```
### Get USSD Transactions
See all payments you've received; filter by reference, and more.
```php
```

## POINT OF SALE
### Create order
### Callback response
### Get order status
### Get POS types
### Get POS devices
### Get payments
### Update POS
### Verify payment

## CARDLESS WITHDRAWAL
### Create Paycode
### Get supported banks
### Get Paycodes
### Verify Paycode status
### Cancel Paycode

## MOBILE AIRTIME
### Purchase airtime
### Retry purchase
### Verify purchase
### Get purchases
### Get retried trail

## MOBILE AIRTIME PIN GENERATION
### Purchase airtime PIN
### Retry purchase
### Verify purchase
### Check status
### Get purchases
### Get retried trail


## MOBILE DATA
### Purchase plan
### Retry purchase
### Get plans
### Verify purchase
### Get purchases
### Get retried trail

## WIFI INTERNET
### Purchase plan
### Retry purchase
### Get plans
### Verify device number
### Verify purchase
### Get purchases
### Get retried trail

## CABLE TV
### Purchase plan
### Retry purchase
### Get plans
### Verify smartcard number
### Verify purchase
### Get purchases
### Get retried trail

## ELECTRICITY
### Purchase token
### Retry purchase
### Verify meter number
### Verify purchase
### Get purchases
### Get retried trail

## BETTING
### Credit account
### Retry transaction
### Get providers
### Verify account
### Verify transaction
### Get transactions
### Get retried trail

## KNOW YOUR CUSTOMER
### BVN lookup
### Verify BVN 1.0
### Verify BVN 2.0
### Verify BVN 3.0
### Verify bank account
### Bank account lookup
### Find bank account
### Verify phone number 1.0
### Verify phone number 2.0
### Verify phone number 3.0
### Verify driver's license
### Verify National ID
### Verify Voter's Card
### Verify International Passport
### Verify company registration
### Verify Tax ID
### Get bank account tier
### Validate bank account tier

## BANK SETTLEMENT
### Request settlement
### Retry request
### Get accounts
### Get settlements
### Verify settlement

## ONE-TIME PASSWORD
### Create OTP
### Verify OTP
### Cancel OTP
### Get OTPs

## MISCELLANEOUS
### Get bank list
### Get balance
### Get coupon codes
### Verify coupon code
