<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Affiliate Products categories
    |--------------------------------------------------------------------------
    |
    | This parameter value can be overridden by the CMS back-end settings.
    |
    */
    'categories' => [
        'powerbanks' => 'Powerbanks'
    ],

    /*
    |--------------------------------------------------------------------------
    | Affiliate Products brands
    |--------------------------------------------------------------------------
    |
    | This parameter value can be overridden by the CMS back-end settings.
    |
    */
    'brands' => [
        'xiaomi'    => 'Xiaomi',
        'tp-link'   => 'TP-Link',
        'anker'     => 'Anker',
    ],

    /*
    |--------------------------------------------------------------------------
    | Affiliate API Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'affiliate' => [
        'bol'   => [
            'api_url'       => 'https://api.bol.com',
            'auth'          => 'token',
            'api_token'     => 'adfadfadvasdvqwevadva'
        ]
    ]

];