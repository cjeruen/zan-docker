<?php

return [
    'host' => '0.0.0.0',
    'port' => 8100,
    'config' => [
        'worker_num' => 1,
        'dispatch_mode' => 3,
        'open_length_check' => 1,
        'package_length_type' => 'N',
        'package_length_offset' => 0,
        'package_body_offset' => 0,
        'package_max_length' => 200000,
    ],
    'monitor' => [
        'max_request' => 100000,
        'max_live_time' => 1800000,          // 30m
        'check_interval' => 10000,           // 1s
        'memory_limit' => 1.5 * 1024 * 1024 * 1024,       // 1.5G
        'cpu_limit' => 70
    ],
    'request_timeout' => 3000,  // 单位ms
];