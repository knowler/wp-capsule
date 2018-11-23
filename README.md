# WordPress Capsule

[![Build Status](https://travis-ci.org/knowler/wp-capsule.svg?branch=master)](https://travis-ci.org/knowler/wp-capsule)

Illuminate's [Capsule] preset for WordPress. This is just a
wrapper with a config, so kudos to Laravel for being awesome. 

This is _not_ a plugin, it's a package for use in a WordPress
plugin.

[Capsule]: https://github.com/illuminate/database

## Requirements

* PHP: ^7.1

## Installation

```sh
composer require knowler/wp-capsule
```

## Usage

Here's example usage within a plugin:

```php
/** Autoload */
require_once __DIR__ . '/vendor/autoload.php';

/** Boot Capsule */
new Knowler\WP\Capsule\Boot;

use Knowler\WP\Capsule\Capsule;

register_activation_hook(__FILE__, function () {
    Capsule::schema()->create('products', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
    });
});

register_deactivation_hook(__FILE__, function () {
    Capsule::schema()->dropIfExists('products');
});
```

## Contributing

Feel free to make a pull request or report issues. I threw this
together pretty quickly.
