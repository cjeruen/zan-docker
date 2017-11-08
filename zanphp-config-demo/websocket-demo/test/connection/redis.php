<?php


return [
    'default_write' => [
        'engine'=> 'redis',
        'host' => 'redis_zan',
        'port' => 6379,
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 1,
            'heartbeat-time' => 35000,
            'init-connection'=> 1,
        ],
    ],
];
