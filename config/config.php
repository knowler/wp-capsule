<?php

return [
    'driver' => 'mysql',
    'host' => env('DB_HOST'),
    'database' => env('DB_NAME'),
    'username' => env('DB_USER'),
    'password' => env('DB_PASSWORD'),
    'charset' => env('DB_CHARSET') ?? 'utf8',
    'collation' => env('DB_COLLATE') ?? 'utf8_unicode_ci',
    'prefix' => env('DB_PREFIX') ?? 'wp_',
];
