# omnipay-abstract-voucher

**DigiTickets abstract voucher driver, extending the Omnipay PHP payment processing library**

Provides class(es) and interface(s) for Omnipay Voucher driver repos to use.

This repo allows other repos to handle voucher redemption/unredemption in a standard way, whilst also following the Omnipay standards, meaning that vouchers can be treated like any other payment method.

For example, repos that use this repo must implement the validate() and redeem() methods, but conceptually, the Omnipay purchase() method is the combination of those two methods.

In simple terms, a sub class would implement the voucher-specific methods, and then implement the Omnipay methods essentially as wrappers around them.

[![Build Status](https://travis-ci.org/digitickets/omnipay-abstract-voucher.png?branch=master)](https://travis-ci.org/digitickets/omnipay-abstract-voucher)
[![Coverage Status](https://coveralls.io/repos/github/digitickets/omnipay-abstract-voucher/badge.svg?branch=master)](https://coveralls.io/github/digitickets/omnipay-abstract-voucher?branch=master)
[![Latest Stable Version](https://poser.pugx.org/digitickets/omnipay-abstract-voucher/version.png)](https://packagist.org/packages/digitickets/omnipay-abstract-voucher)
[![Total Downloads](https://poser.pugx.org/digitickets/omnipay-abstract-voucher/d/total.png)](https://packagist.org/packages/digitickets/omnipay-abstract-voucher)

## Installation

The DigiTickets Omnipay Abstract Voucher package is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "digitickets/omnipay-abstract-voucher": "~1.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## What's Included

This repo defines certain methods that any voucher gateway must implement, and defines methods that will exist in the response objects.

## What's Not Included

The code in this repo does not actually do anything. It is meant to be common code/interfaces that other repos will use.

## Basic Usage

Extend the abstract gateway in this class and implement the voucher-specific methods. Then implement the Omnipay methods.

For general Omnipay usage instructions, please see the main [Omnipay](https://github.com/omnipay/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you believe you have found a bug in this driver, please report it using the [GitHub issue tracker](https://github.com/digitickets/omnipay-abstract-voucher/issues),
or better yet, fork the library and submit a pull request.
