<?php

return [
    'app' => [
        'env' => getenv('DIRECTUS_ENVIRONMENT'),
        'timezone' => getenv("TIMEZONE")
    ],

    'settings' => [
        'logger' => [
            'path' => __DIR__ . '/../logs',
        ],
    ],

    'database' => [
        'type' => 'mysql',
        'host' => getenv("MYSQL_HOST"),
        'port' => 3306,
        'name' => getenv("MYSQL_DATABASE"),
        'username' => getenv("MYSQL_USERNAME"),
        'password' => getenv("MYSQL_PASSWORD"),
        'engine' => 'InnoDB',
        'charset' => 'utf8mb4',
        'options' => array(
            PDO::MYSQL_ATTR_SSL_CA => '/etc/ssl/certs/Baltimore_CyberTrust_Root.pem',
            PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        ),
    ],

    'cache' => [
        'enabled' => false,
        'response_ttl' => 3600, // seconds
        // 'pool' => [
        //    'adapter' => 'apc'
        // ],
        // 'pool' => [
        //    'adapter' => 'apcu'
        // ],
        // 'pool' => [
        //    'adapter' => 'filesystem',
        //    'path' => '../cache/', // relative to the api directory
        // ],
        // 'pool' => [
        //    'adapter'   => 'memcached',
        //    //'url' => 'localhost:11211;localhost:11212'
        //    'host'      => 'localhost',
        //    'port'      => 11211
        // ],
        // 'pool' => [
        //    'adapter'   => 'memcache',
        //    'url' => 'localhost:11211;localhost:11212'
        //    //'host'      => 'localhost',
        //    //'port'      => 11211
        //],
        // 'pool' => [
        //    'adapter'   => 'redis',
        //    'host'      => 'localhost',
        //    'port'      => 6379
        // ],
        //'pool' => [
        //    'adapter'   => 'predis',
        //    'host'      => 'bandicoot.redis.cache.windows.net',
        //    'port'      => 6379,
        //    'password'  => getenv("REDIS_PASSWORD"),
        // ],
     ],

    'storage' => [
        'adapter' => 'local',
        // The storage root is the directus root directory.
        // All path are relative to the storage root when the path is not starting with a forward slash.
        // By default the uploads directory is located at the directus public root
        // An absolute path can be used as alternative.
        'root' => 'public/uploads/_/originals',
        // This is the url where all the media will be pointing to
        // here is where Directus will assume all assets will be accessed
        // Ex: (yourdomain)/uploads/_/originals
        'root_url' => '/uploads/_/originals',
        // Same as "root", but for the thumbnails
        'thumb_root' => 'public/uploads/_/thumbnails',
        //   'key'    => 's3-key',
        //   'secret' => 's3-secret',
        //   'region' => 's3-region',
        //   'version' => 's3-version',
        //   'bucket' => 's3-bucket',
        //   'options' => ['ACL' => 'public-read', 'Cache-Control' => 'max-age=604800']
        // Set custom S3 endpoint
        //   'endpoint' => 's3-endpoint',
        //   'OSS_ACCESS_ID' => 'aliyun-oss-id',
        //   'OSS_ACCESS_KEY' => 'aliyun-oss-key',
        //   'OSS_ENDPOINT' => 'aliyun-oss-endpoint',
        //   'OSS_BUCKET' => 'aliyun-oss-bucket'
        // Use an internal proxy for downloading all files
        //'proxy_downloads' => false,
    ],

    'mail' => [
        'default' => [
            'transport' => 'sendmail',
            'from' => 'admin@example.com'
        ],
    ],

    'cors' => [
        'enabled' => true,
        'origin' => ['*'],
        'methods' => [
            'GET',
            'POST',
            'PUT',
            'PATCH',
            'DELETE',
            'HEAD',
        ],
        'headers' => [],
        'exposed_headers' => [],
        'max_age' => null, // in seconds
        'credentials' => false,
    ],

    'rate_limit' => [
        'enabled' => false,
        'limit' => 100, // number of request
        'interval' => 60, // seconds
        'adapter' => 'redis',
        'host' => '127.0.0.1',
        'port' => 6379,
        'timeout' => 10
    ],

    'hooks' => [
        'actions' => [],
        'filters' => [],
    ],

    'feedback' => [
        'token' => 'a-kind-of-unique-token',
        'login' => true
    ],

    // These tables will not be loaded in the directus schema
    'tableBlacklist' => [],

    'auth' => [
        'secret_key' => getenv("SECRET_KEY"),
        'public_key' => getenv("PUBLIC_KEY"),
        'social_providers' => [
            // 'okta' => [
            //     'client_id' => '',
            //     'client_secret' => '',
            //     'base_url' => 'https://dev-000000.oktapreview.com/oauth2/default'
            // ],
            // 'github' => [
            //     'client_id' => '',
            //     'client_secret' => ''
            // ],
            // 'facebook' => [
            //     'client_id'          => '',
            //     'client_secret'      => '',
            //     'graph_api_version'  => 'v2.8',
            // ],
            // 'google' => [
            //     'client_id'       => '',
            //     'client_secret'   => '',
            //     'hosted_domain'   => '*',
            //     // Uses OpenIDConnect to fetch the email instead of using the Google+ API
            //     // Disabling the OIDC Mode, requires you to enable the Google+ API otherwise it will fail
            //     'use_oidc_mode'   => true,
            // ],
            // 'twitter' => [
            //     'identifier'   => '',
            //     'secret'       => ''
            // ]
        ]
    ],
];
