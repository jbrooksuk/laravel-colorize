# Laravel Colorize

A mixin for Laravel's `Stringable` to easily apply colors and styles to CLI text.

## Installation

You can install the package via Composer:

```
composer require jbrooksuk/colorize
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
