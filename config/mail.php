<?php


return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'iotmakeriq@gmail.com', 'name' => 'Your Title'],
    'encryption' => 'tls',
    'username' => env('iotmakeriq@gmail.com'),
    'password' => env('iotmaker2020'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,

    'stream' => [
        'ssl' => [
            'allow_self_signed' => true,
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ]
];