<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '7072333142786031',
        'client_secret' => '9f8278ee6813c6700b30594d5a93ce5a',
        'redirect' => '/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '318932752538-udksiaq3pt710atosshjbs3eo2m7rhi1.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/auth/google/callback',
    ],
    'github' => [
        'client_id' => 'Iv1.370df232c12a955c',
        'client_secret' => '567ea672747302c1bcceccf50d2a494c0bac40da',
        'redirect' => '/auth/github/callback',
    ],
];
