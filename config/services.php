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

    'email' => env('PAGE_EMAIL', ''),
    'phone' => [
        'MX' => env('PAGE_PHONE_MX', '+52 (000) 000 0000'),
        'US' => env('PAGE_PHONE_US', '+1 (323) 000 0000'),
    ],
    'mailjet' => [
        'key' => env('MAILJET_KEY',''),
        'secret' => env('MAILJET_SECRET',''),
    ],
    'captcha' => [
        'key' => env('CAPTCHA_PUBLIC',''),
        'secret' => env('CAPTCHA_SECRET',''),
    ],
];
