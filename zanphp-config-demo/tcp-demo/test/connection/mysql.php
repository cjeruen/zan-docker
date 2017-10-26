<?php

return [
    'default_write' => [
        'engine'=> 'mysqli',
        'host' => 'mysql_zan',
        'user' => 'root',
        'password' => 'root',
        'database' => 'information_schema',
        'port' => 3306,
        'pool'  => [
            'maximum-connection-count' => 50,
            'minimum-connection-count' => 0,
            'heartbeat-time' => 5000,
            'init-connection'=> 0,
        ],
    ],
];
