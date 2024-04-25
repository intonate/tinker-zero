<p align="center"><img src="/logo.svg" title="Tinker Zero" alt="Logo Tinker Zero"></p>

<p align="center">
  <a href="https://github.com/intonate/tinker-zero/actions/workflows/phpunit.yml?query=workflow:PHPUnit"><img src="https://github.com/intonate/tinker-zero/workflows/PHPUnit/badge.svg" alt="PHPUnit" /></a>
  <a href="https://styleci.io/repos/110322700"><img src="https://github.styleci.io/repos/110322700/shield?style=flat" alt="StyleCI" /></a>
  <a href="https://packagist.org/packages/intonate/tinker-zero"><img src="https://img.shields.io/packagist/dt/intonate/tinker-zero.svg" alt="Total Downloads" /></a>
  <a href="https://packagist.org/packages/intonate/tinker-zero"><img src="https://img.shields.io/packagist/v/intonate/tinker-zero.svg?label=stable" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/intonate/tinker-zero"><img src="https://img.shields.io/packagist/l/intonate/tinker-zero.svg" alt="License" /></a>
</p>

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
