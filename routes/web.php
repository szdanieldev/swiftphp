<?php

return [
    // Default route
    'default' => ['action' => 'Welcome@index', 'protected' => false],

    'GET' => [
        '/' => ['action' => 'Welcome@index', 'protected' => false],
        '/auth/login' => ['action' => 'Auth@login', 'protected' => false],
        '/auth/register' => ['action' => 'Auth@register', 'protected' => false],
        '/auth/logout' => ['action' => 'Auth@logout', 'protected' => false],
        '/dashboard' => ['action' => 'Main@dashboard', 'protected' => true],
        '/profile/edit' => ['action' => 'Profile@edit', 'protected' => true],
        '/profile/password' => ['action' => 'Profile@password', 'protected' => true],
    ],
    'POST' => [
        '/auth/login' => ['action' => 'Auth@login', 'protected' => false],
        '/auth/register' => ['action' => 'Auth@register', 'protected' => false],
        '/auth/logout' => ['action' => 'Auth@logout', 'protected' => true],
        '/profile/edit' => ['action' => 'Profile@edit', 'protected' => true],
        '/profile/password' => ['action' => 'Profile@password', 'protected' => true],
    ],
];
