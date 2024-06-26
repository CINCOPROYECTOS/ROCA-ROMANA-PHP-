<?php

use Illuminate\Support\Facades\File;

return [
    'icon' => '/assets/images/logo/logo.png',

    'background' => '/images/default/background.jpg',

    'support_url' => 'https://join.skype.com/invite/Wy96gZvdk2oW',

    'server' => [
        'php' => [
            'name' => 'PHP Version',
            'version' => '>= 8.0.0',
            'check' => fn () => version_compare(PHP_VERSION, '8', '>')
        ],
        'pdo' => [
            'name' => 'PDO',
            'check' => fn () => extension_loaded('pdo_mysql')
        ],
        'mbstring' => [
            'name' => 'Mbstring extension',
            'check' => fn () => extension_loaded('mbstring')
        ],
        'fileinfo' => [
            'name' => 'Fileinfo extension',
            'check' => fn () => extension_loaded('fileinfo')
        ],
        'openssl' => [
            'name' => 'OpenSSL extension',
            'check' => fn () => extension_loaded('openssl')
        ],
        'tokenizer' => [
            'name' => 'Tokenizer extension',
            'check' => fn () => extension_loaded('tokenizer')
        ],
        'json' => [
            'name' => 'Json extension',
            'check' => fn () => extension_loaded('json')
        ],
        'curl' => [
            'name' => 'Curl extension',
            'check' => fn () => extension_loaded('curl')
        ]
    ],

    'folders' => [
        'storage.framework' => [
            'name' => base_path() . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'framework',
            'check' => fn () => File::chmod('../storage/framework') >= 755
        ],
        'storage.logs' => [
            'name' => base_path() . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'logs',
            'check' => fn () => File::chmod('../storage/logs') >= 755
        ],
        'storage.cache' => [
            'name' => base_path() . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'cache',
            'check' => fn () => File::chmod('../bootstrap/cache') >= 755
        ],
    ],

    'database' => [
        'seeders' => false
    ],

   'commands' => [
        'db:seed --class=DatabaseSeeder'
    ],

    'admin_area' => [
        'user' => [
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]
    ]
];
