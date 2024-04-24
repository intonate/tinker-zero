# Tinker Zero

[![PHPUnit](https://github.com/intonate/tinker-zero/workflows/PHPUnit/badge.svg)](https://github.com/intonate/tinker-zero/actions?query=workflow:PHPUnit)
[![StyleCI](https://github.styleci.io/repos/110322700/shield?style=plastic)](https://styleci.io/repos/110322700)
[![Licence](https://img.shields.io/packagist/l/intonate/tinker-zero)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/intonate/tinker-zero)](https://packagist.org/packages/intonate/tinker-zero)
[![Latest Stable Version](https://img.shields.io/packagist/v/intonate/tinker-zero)](https://packagist.org/packages/intonate/tinker-zero)

This is a *community project* and not an official Laravel or Laravel Zero package

## Introduction

**Tinker Zero** is a bridge that allows using [Laravel Tinker](https://github.com/laravel/tinker) in your [Laravel Zero](http://laravel-zero.com) applications.

Laravel Zero was created by Nuno [Nuno Maduro](https://github.com/nunomaduro) and [Owen Voke](https://github.com/owenvoke), and is a micro-framework that provides an elegant starting point for your console application. It's a customized version of Laravel optimized for building command-line applications.

## Installation

* To get started install it using composer:

```sh
composer require intonate/tinker-zero
```

* Then add `TinkerZeroServiceProvider` to your `config/app.php` file:

```diff
'providers' => [
    App\Providers\AppServiceProvider::class,
++  Intonate\TinkerZero\TinkerZeroServiceProvider::class,
],
```

## Usage

Tinker Zero provides you with all the power of [Laravel Tinker](https://github.com/laravel/tinker).

```sh
php application tinker

# Custom application name
php application app:rename movies
php movies tinker
```

## Credits

* [Jorge González](https://github.com/scrubmx)
* [All Contributors](../../contributors)

## License

Tinker Zero is open-sourced software licensed under the [MIT license](LICENSE.md).
