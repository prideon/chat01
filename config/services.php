<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],



'facebook' => [

    'client_id' => '893687934137932', //Facebook API

    'client_secret' => '5dc877979f7ded6ef283524753b19c72', //Facebook Secret

    'redirect' => 'http://localhost:8888/auth/facebook/callback',
],

    'twitter' => [

        'client_id' => 'cLHAtEwqhxNMvjptos0GcB94b',

        'client_secret' => 'QzlYhEsK3aV3yztNYzHxY3RiiI3sc05A282WFcKucK10ZyVN8E',

        'redirect' => 'http://localhost:8888/auth/twitter/callback',

    ],

];
