# Tinker Zero

[![TravisCI](https://img.shields.io/travis/intonate/tinker-zero/master.svg?style=flat-square)](https://travis-ci.org/intonate/tinker-zero)
[![StyleCI](https://styleci.io/repos/110322700/shield)](https://styleci.io/repos/110322700)
[![ScrutinizerCI](https://img.shields.io/scrutinizer/g/intonate/tinker-zero.svg?style=flat-square)](https://scrutinizer-ci.com/g/intonate/tinker-zero)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/intonate/tinker-zero/blob/master/LICENSE)

## Introduction

Tinker Zero is a bridge that allows using [laravel/tinker](https://github.com/laravel/tinker) in your [Laravel Zero](http://laravel-zero.com) applications.

**This is a community project and not an "official" one**

## Installation

To get started simply run:

```sh
composer require intonate/tinker-zero
```

And register `Intonate\TinkerZero\TinkerZeroServiceProvider` in your `config/app.php` file:

```php
'providers' => [

    Intonate\TinkerZero\TinkerZeroServiceProvider::class,

],
```

## Usage

Tinker Zero provides you with all the power of the Laravel Tinker.

```sh
php your-app-name tinker
```

## License

Tinker Zero is open-sourced software licensed under the [MIT license](LICENSE.md).
