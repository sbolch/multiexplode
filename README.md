# multiexplode

> Splits a string (like explode function) by multiple limiters.

## Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require sbolch/multiexplode
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Usage

```php
$results = multiexplode(array('/', '://', ':', '?', '#', ':'), 'http://url.com/example:80?query#hash');
```

returns:

```
Array
(
    [0] => http
    [1] => url.com
    [2] => example
    [3] => 80
    [4] => query
    [5] => hash
)
```
