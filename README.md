# logger-aware-trait
A PSR-3 trait allowing any class to easily add logger support

[![release](https://poser.pugx.org/duncan3dc/logger-aware-trait/version.svg)](https://packagist.org/packages/duncan3dc/logger-aware-trait)
[![build](https://github.com/duncan3dc/logger-aware-trait/workflows/.github/workflows/buildcheck.yml/badge.svg?branch=main)](https://github.com/duncan3dc/logger-aware-trait/actions?query=branch%3Amain+workflow%3A.github%2Fworkflows%2Fbuildcheck.yml)
[![coverage](https://codecov.io/gh/duncan3dc/logger-aware-trait/graph/badge.svg)](https://codecov.io/gh/duncan3dc/logger-aware-trait)


## Installing

The recommended method of installing this library is via [Composer](//getcomposer.org/).

Run the following command from your project root:

```bash
$ composer require duncan3dc/logger-aware-trait
```

## Setup

Simply apply the trait to your classes:

```php
use duncan3dc\Log\LoggerAwareTrait;

class MyClass
{
    use LoggerAwareTrait;
}
```

Now the class will have a `getLogger()` method that you can safely call.  
If a logger has been injected using `setLogger()` then that logger will be provided, otherwise a `NullLogger` will be used instead.


## Changelog
A [Changelog](CHANGELOG.md) has been available since the beginning of time


Where to get help
-----------------
Found a bug? Got a question? Just not sure how something works?  
Please [create an issue](//github.com/duncan3dc/logger-aware-trait/issues) and I'll do my best to help out.  
Alternatively you can catch me on [Twitter](https://twitter.com/duncan3dc)


## duncan3dc/logger-aware-trait for enterprise

Available as part of the Tidelift Subscription

The maintainers of duncan3dc/logger-aware-trait and thousands of other packages are working with Tidelift to deliver commercial support and maintenance for the open source dependencies you use to build your applications. Save time, reduce risk, and improve code health, while paying the maintainers of the exact dependencies you use. [Learn more.](https://tidelift.com/subscription/pkg/packagist-duncan3dc-logger-aware-trait?utm_source=packagist-duncan3dc-logger-aware-trait&utm_medium=referral&utm_campaign=readme)
