# Assert

[![Build Status](https://travis-ci.org/acelot/assert.svg?branch=master)](https://travis-ci.org/acelot/assert)
[![Code Climate](https://img.shields.io/codeclimate/coverage/acelot/assert.svg)](https://codeclimate.com/github/acelot/assert)
![](https://img.shields.io/badge/dependencies-zero-blue.svg)
![](https://img.shields.io/badge/license-MIT-green.svg)

Declarative validator for PHP 7. Inspired by [Respect/Validation](https://github.com/Respect/Validation).

# Example

```php
<?php declare(strict_types=1);

namespace MyNamespace;

use Acelot\Assert\Rule\{
    AllOf,
    StringType,
    MinLength,
    MaxLength
};

$v = new AllOf(
    new StringType(),
    new MinLength(3),
    new MaxLength(256)
);

$v->assert(1); // throws a AllOfException
$v->assert('asd'); // pass
```
