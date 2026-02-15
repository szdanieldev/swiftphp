<?php

return [
    // Default route
    'default' => ['action' => 'Landing@index', 'protected' => false],

    'GET' => [
        '/' => ['action' => 'Landing@index', 'protected' => false],
        '/auth/login' => ['action' => 'Auth@login', 'protected' => false],
        '/auth/register' => ['action' => 'Auth@register', 'protected' => false],
        '/dashboard' => ['action' => 'Main@dashboard', 'protected' => true],
    ],
    'POST' => [
        '/auth/login' => ['action' => 'Auth@login', 'protected' => false],
        '/auth/register' => ['action' => 'Auth@register', 'protected' => false],
        '/auth/logout' => ['action' => 'Auth@logout', 'protected' => true],
    ],
];
