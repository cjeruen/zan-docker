<?php

return [
    'trace' => [
        'engine'=> 'tcp',
        'host' => 'etcd_zan',
        'port' => 2280,
        'timeout' => 5000,
        'hasRecv' => false,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
        'pool'  => [
            'maximum-connection-count' => 5,
            'minimum-connection-count' => 0,
            'init-connection'=> 0,
        ],
    ],
];
