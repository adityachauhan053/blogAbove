<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
    'client_id' => '103170716826784',
    'client_secret' => '460d1baf043226ee79d831b8bf9eb1ee',
    'redirect' => 'http://localhost/blogAbove/callback',
	],
	'google' => [
    'client_id' => '665319011414-o19tpmbt1bmt847dlohgmln8r0pcvi98.apps.googleusercontent.com',
    'client_secret' => 'D_Q9dIUshSaaOW30kqbrbndO',
    'redirect' => 'http://localhost/blogAbove/home',
],

];
