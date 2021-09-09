<?php

return [
    'roles' => [
        'admin' => 1,
        'student' => 2,
    ],
    'distance_operators' => [
        'na' => 1,
        '<' => 2,
        '>' => 3,
        '=' => 4,
    ],
    'surfaces' => [
        'rough' => 1,
        'smooth' => 2,
    ],
    'times' => [
        'day' => 1,
        'night' => 2,
    ],
    'conditions' => [
        'strong' => 1,
        'moderate' => 2,
        'slight' => 3,
        'cloudy' => 4,
        'clear' => 5,
    ],
    'status' => [
        'pending' => 'Pending',
        'active' => 'Active',
        'inactive' => 'Inactive',
    ],
    'admin' => [
        'email' => env('ADMIN_MAIL', 'i2careproject@gmail.com'),
    ]
];
