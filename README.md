# Tinker Zero

[![TravisCI](https://img.shields.io/travis/intonate/tinker-zero/master.svg?style=flat-square)](https://travis-ci.org/intonate/tinker-zero)
[![StyleCI](https://styleci.io/repos/110322700/shield)](https://styleci.io/repos/110322700)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/intonate/tinker-zero/blob/master/LICENSE)

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
