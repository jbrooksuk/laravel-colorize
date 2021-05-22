# Laravel Colorize

A mixin for Laravel's `Stringable` to easily apply colors and styles to CLI text.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jbrooksuk/laravel-colorize?style=flat-square)](https://packagist.org/packages/jbrooksuk/laravel-colorize)
[![Total Downloads](https://img.shields.io/packagist/dt/jbrooksuk/laravel-colorize?style=flat-square)](https://packagist.org/packages/jbrooksuk/laravel-colorize)

## Installation

You can install the package via Composer:

```
composer require jbrooksuk/laravel-colorize
```

## Usage

### `blink`

Make the text blink.

```php
Str::of('Hey Laravel')->blink();
```

### `bold`

Make the text bold.

```php
Str::of('Hey Laravel')->bold();
```

### `colorize`

Colorize the text. Foreground, Background.

```php
Str::of('Hey Laravel')->colorize('red', 'blue');
```

### `conceal`

Make the text invisible.

```php
Str::of('Hey Laravel')->conceal();
```

### `reverse`

Swap the foreground with the background and the background with the foreground.

```php
Str::of('Hey Laravel')->reverse();
```

### `underscore`

Make the text underscored.

```php
Str::of('Hey Laravel')->underscore();
```

## Chaining

Of course, because Laravel Colorize uses `Stringable`, all of these methods can be chained together. 

```php
Str::of('Hey Laravel')->colorize('red', 'yellow')->bold()->blink();
```
