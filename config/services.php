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
     'client_id' => '351994669094784',
     'client_secret' => 'e608ecebb2fb06c67dad1b97e206953e',
     'redirect' => 'http://localhost:8000/facebook/callback',
    ],

    'google' => [
     'client_id' => '814635597028-4vue4800rugd5ksb8i7qkr8f8lg5e9ig.apps.googleusercontent.com',
     'client_secret' => '9S_heSh6Jx6cp2vt2AOkGlhu',
     'redirect' => 'http://localhost:8000/google/callback',
    ],

    'github' => [
     'client_id' => '24e0c82815a52fd1b6fc',
     'client_secret' => '63f9d52862c0b3b8ae295a2aef39350c50aea49f',
     'redirect' => 'http://localhost:8000/github/callback',
    ],

];
